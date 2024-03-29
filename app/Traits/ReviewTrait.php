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
        $sum =  BusinessReview::where('business_id', $biz_id)->sum('rating');
        
        $total =  BusinessReview::where('business_id', $biz_id)->count();
        // Calculate the average rating
        $average = $sum / $total;

        // Round the average to two decimal places
        $average = round($average, 2);

        // Output the average rating
        return $average;
    }

    //Get a Review
    public function get_review($id){
        return BusinessReview::where('id', $id)->with('business.owner')
                                ->with('reviewer')->first();
    }

    //Get All Reviews | Paginated
    public function all_reviews(){
        if(auth()->user()->type == 'owner'){
            return BusinessReview::whereHas('business.owner', function ($query) {
                $query->where('id', auth()->user()->id);
            })->with('reviewer')->paginate(10 );
        }else{
            return BusinessReview::with('business.owner')
                                    ->with('reviewer')->paginate(10 );
        }
    }

    //Get All Reviews 
    public function get_all_reviews(){
        $reviews = BusinessReview::with('business', 'reviewer')->latest()->get();
        // $reviews = Cache::remember('reviews_list', 60 * 60, function(){
        //     return BusinessReview::with('business')->get();
        // });
        return $reviews; 
    }

    public function my_reviews(){
        return User::with('reviews')->where('id', auth()->user()->id)->first();
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