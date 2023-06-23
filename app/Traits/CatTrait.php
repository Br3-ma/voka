<?php

namespace App\Traits;


use App\Models\Business;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

trait CatTrait{

    use WithPagination;
    
    public function get_categories(){
        return Category::paginate(10);
    }    
    public function get_tags(){
        return Tag::paginate(10);
    }
    public function create_category($arr){
        try {
            Category::create($arr);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function create_tag($arr){
        try {
            Tag::create($arr);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }






    
    public function delete_cat($id){
        try {
            Category::where('id', $id)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function deleteCategories($array){
        try {
            Category::whereIn('id', $array)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function deleteTags($array){
        try {
            Tag::whereIn('id', $array)->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

}