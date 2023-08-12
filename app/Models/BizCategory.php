<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BizCategory extends Model
{
    use HasFactory;


    protected $fillable = [
        'businesses_id',
        'categories_id'
    ];

    public function business(){
        return $this->belongsTo(Business::class, 'businesses_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
