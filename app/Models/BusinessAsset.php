<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessAsset extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc',
        'path',
        'type',
        'user_id',
        'business_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function business(){
        return $this->belongsTo(Business::class, 'business_id');
    }
}
