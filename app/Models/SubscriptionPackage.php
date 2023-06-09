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

    public function packages(){
        return $this->hasMany(SubscriptionFeature::class);
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
