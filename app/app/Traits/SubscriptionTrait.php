<?php

namespace App\Traits;

use App\Models\Business;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait SubscriptionTrait{

    public function get_all_subs(){
        return Business::get();
    }

    //***************** CREATE ******
    public function create_subscription($req){
        try {
            Subscription::create($req->toArray());
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}