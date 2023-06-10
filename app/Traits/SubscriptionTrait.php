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
    public function get_all_subs(){
        return Cache::remember('sub_list', 60 * 60, function(){
            return SubscriptionPackage::with('feature')->get();
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
}