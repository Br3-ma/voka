<?php

namespace App\Traits;

use App\Models\Business;
use App\Models\Subscription;
use App\Models\SubscriptionFeature;
use App\Models\SubscriptionPackage;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

trait SubscriptionTrait{
    use WithPagination;
    
    public function get_top5_subscribers(){
        $users = Business::with('owner')->latest()->take(5)->get();
        return $users;
    }

    public function get_all_subs(){
        return Cache::remember('sub_list', 60 * 60, function(){
            return SubscriptionPackage::with('feature')->paginate(10);
        });
    }

    //***************** CREATE ******
    public function create_subscription($data){
        $bool = DB::transaction(function() use ($data){
            try {
                $item = SubscriptionPackage::create([
                    'user_id'=>$data['user_id'],
                    'name'=>$data['name'],
                    'description'=>$data['desc'],
                    'price'=>$data['price']
                ]);
    
                // Add Features with prices
                foreach ($data['feat'] as $key => $value) {
                    SubscriptionFeature::create([
                        'subscription_id' => $item->id,
                        'name' => $data['feat'][$key],
                        'price' => $data['feat_price'][$key]
                    ]);
                }
                DB::commit();
                return true;
            } catch (\Throwable $th) {
                DB::rollBack();
                return false;
            }
        });
        return $bool;
    }

    
    
    public function delete_subscription($id){
        try {
            SubscriptionPackage::where('id', $id)->delete();
            SubscriptionFeature::where('subscription_id', $id)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function deleteSubscriptions($array){
        try {
            SubscriptionPackage::whereIn('id', $array)->delete();
            SubscriptionFeature::whereIn('subscription_id', $array)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}