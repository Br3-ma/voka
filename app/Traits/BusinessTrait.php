<?php

namespace App\Traits;

use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

trait BusinessTrait{
    use WithPagination;
    public function get_all_businesses(){
        return Business::paginate(10);
    }
    
    public function getBusiness($id){
        return Business::where('id', $id)->first();
    }

    //***************** CREATE ******
    public function create_business($req){
        try {
            if ($req->file('image_path')) {
                $cover_image = Storage::put('public/business', $req->file('image_path'));
            }
            $data = Business::create($req->toArray());
            $data->cover = isset($cover_image) ? $cover_image : '';
            $data->save();

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}