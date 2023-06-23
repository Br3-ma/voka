<?php

namespace App\Traits;

use App\Models\BusinessReview;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

trait ReviewTrait{
    use WithPagination;

    //***************** READ ******
    public function avg_rating($biz_id){
        // Calculate the sum of all ratings
        $sum = Cache::remember('avg_rate', 60 * 60, function() use ($biz_id){
            return BusinessReview::where('business_id', $biz_id)->sum('rating');
        });

        // Count the total number of ratings
        $total = Cache::remember('avg_rate', 60 * 60, function() use ($biz_id){
            return BusinessReview::where('business_id', $biz_id)->count();
        });

        // Calculate the average rating
        $average = $sum / $total;

        // Round the average to two decimal places
        $average = round($average, 2);

        // Output the average rating
        return $average;
    }

    public function all_reviews(){
        return BusinessReview::with('business.owner')
                                ->with('reviewer')->paginate(10 );
    }

    public function get_all_reviews(){
        $reviews = BusinessReview::with('business')->get();
        // $reviews = Cache::remember('reviews_list', 60 * 60, function(){
        //     return BusinessReview::with('business')->get();
        // });
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





    
    public function delete_review($id){
        try {
            BusinessReview::where('id', $id)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function deleteReviews($array){
        try {
            BusinessReview::whereIn('id', $array)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}