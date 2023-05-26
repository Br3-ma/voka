<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessReview extends Model
{
    use HasFactory;
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
