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
    public function biz(){
        return $this->belongsToMany(Business::class);
    }

    public static function CatName($id){
        $found = Category::where('id', $id)->exists();
        if($found){
            return Category::where('id', $id)->first()->name;
        }else{
            return 'Removed';
        }
    }
}
