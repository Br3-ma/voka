<?php

namespace App\Traits;

use App\Models\BusinessReview;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

trait ReviewTrait{
    //***************** READ ******
    public function get_all_reviews(){
        $reviews = Cache::remember('reviews_list', 60 * 60, function(){
            return BusinessReview::with('business')->get();
        });
        return $reviews; 
    }

    public function get_bad_reviews(){

    }

    public function get_good_reviews(){

    }

    public function get_biz_reviews($id){
        return BusinessReview::where('business_id', $id)->get();
    }

    public function get_biz_bad_reviews($id){
        
    }

    public function get_biz_good_reviews($id){
        
    }

    //***************** CREATE ******
    public function create_review($data){
        try {
            BusinessReview::create($data);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}