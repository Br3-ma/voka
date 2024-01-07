<?php

namespace App\Traits;

use App\Models\BizCategory;
use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

trait BusinessTrait{
    use WithPagination;
    public function get_all_businesses(){
        if(auth()->user()){
            if (auth()->user()->type == 'owner') {
                return Business::where('user_id', auth()->user()->id)->paginate(10);        
            }else{
                return Business::paginate(20);
            }
        }else{
            return Business::paginate(10);
        }
    }
    public function all_businesses(){
        return Business::paginate(20);
    }
    public function get_subscribed_businesses(){
        // make status 1
        return Business::where('status', 0)->get();
    }
    
    public function getBusiness($id){
        return Business::with('owner')->where('id', $id)->first();
        // return Business::with('categories')->where('id', $id)->first();
    }

    //***************** CREATE ******
    public function create_business($req){  
        try {
            if ($req->file('image_path')) {
                $cover_image = Storage::put('business', $req->file('image_path'));
            }
            $data = Business::create($req->toArray());
            $data->cover = isset($cover_image) ? $cover_image : '';
            $data->save();

            
            foreach ($req->toArray()['categories'] as $key => $value) {
                BizCategory::create([
                    'businesses_id' => $data->id,
                    'categories_id' => $value
                ]);
            }
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    public function delete_biz($id){
        try {
            Business::where('id', $id)->delete();
            BusinessReview::where('business_id', $id)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function deleteMany($array){
        try {
            Business::where('id', $array)->delete();
            BusinessReview::whereIn('business_id', $array)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}