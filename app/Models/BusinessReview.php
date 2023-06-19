<?php

namespace App\Models;

use App\Traits\ReviewTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessReview extends Model
{
    use HasFactory, ReviewTrait;
    protected $fillable = [
        'business_id',
        'user_id',
        'rating',
        'review',
        'max_rating',
        'status'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'reviewer_name',
    ];

    public static function total(){
        return BusinessReview::count();
    }

    public static function avarage_rating($id){
         // Calculate the sum of all ratings
         $sum = BusinessReview::where('business_id', $id)->sum('rating');

        // Count the total number of ratings
        $total = BusinessReview::where('business_id', $id)->count();
        if ($total != 0) {
            // Calculate the average rating
            $average = $sum / $total;
    
            // Round the average to two decimal places
            $average = round($average, 2);
    
            // Output the average rating
            return $average;
        } else {
            // Output the average rating
            return 0;
        }
    }

    public function getReviewerNameAttribute(){
        $name = User::where('id', $this->user_id)->first();
        return $name->fname.' '.$name->lname;
    }

    public function reviewer(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function business(){
        return $this->belongsTo(Business::class, 'business_id');
    }
}
