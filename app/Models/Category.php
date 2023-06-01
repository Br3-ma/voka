<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'user_id'
    ];

    public function added_by(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
