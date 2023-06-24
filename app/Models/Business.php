<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover',
        'name',
        'user_id',
        'category_id',
        'sub_category_id',
        'description',
        'status',
        'address',
        'email',
        'phone1',
        'phone2',
        'country',
        'sector',
        'categories'
    ];
    protected $casts = [
        'categories' => 'array'
    ];

    
    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function review(){
        return $this->hasMany(BusinessReview::class);
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }

    public function active_subscription(){
        return $this->hasOne(Subscription::class)->where('active', 1);
    }
}
