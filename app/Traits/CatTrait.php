<?php

namespace App\Traits;

use App\Models\Business;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

trait CatTrait{

    use WithPagination;
    
    public function create_category($arr){
        try {
            Category::create($arr);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

}