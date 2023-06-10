<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price'
    ];

    public function added_by(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function feature(){
        return $this->hasMany(SubscriptionFeature::class, 'subscription_id');
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
