<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'user_id',
        'sub_package_id',
        'payment_status',
        'is_active',
        'status'
    ];

    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function business(){
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function package(){
        return $this->belongsTo(SubscriptionPackage::class, 'sub_package_id');
    }
}
