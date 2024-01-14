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
        'province',
        'city',
        'address',
        'email',
        'phone1',
        'phone2',
        'country',
        'sector',
        'categories',
        'start_time',   
        'stop_time',
        'days',
        'website',
        'ios',
        'apk',
        'map',
        'is_certified'
    ];
    protected $casts = [
        'categories' => 'array'
    ];

    
    protected static function boot()
    {
        parent::boot();

        // Using the boot method to eager load the 'businessDetail' relationship 
        // when querying the 'Business' model.
        static::addGlobalScope('withReview', function ($builder) {
            $builder->with('review');
        });
    }

    public static function total(){
        if(auth()->user()->type == 'owner'){
            return Business::where('user_id', auth()->user()->id)->count();
        }else{
            return Business::count();
        }
    }
    
    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }    

    public function mine(){
        return $this->belongsTo(User::class, 'user_id')->where('user_id', auth()->user()->id);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }
    public function bizcategories(){
        return $this->hasMany(BizCategory::class, 'businesses_id');
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
