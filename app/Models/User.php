<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'type',
        'email',
        'password',
        'about',
        'address',
        'ilove',
        'nickname',
        'country',
        'gender',
        'dob',
        'badge_level',
        'badge_icon',
        'pic',
        'cover_pic'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function totalReviewers(){
        if(auth()->user()->type == 'owner'){
            return User::whereHas('reviews.business', function($query){
                $query->where('user_id', auth()->user()->id);
            })->count();
        }else{
            return User::count();
        }
    }


    public function reviews(){
        return $this->hasMany(BusinessReview::class);
    }

    public function business(){
        return $this->hasMany(Business::class);
    }

    public function subscription(){
        return $this->hasMany(Subscription::class);
    }
}
