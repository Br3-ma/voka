<?php

namespace App\Http\Livewire\Dashboard\Categories;

use App\Traits\CatTrait;
use Livewire\Component;

class Create extends Component
{
    use CatTrait;
    public $name, $desc, $user_id;

    public function render()
    {
        return view('livewire.dashboard.categories.create');
    }

    public function store(){
       
        $data = [
            'name'=>$this->name,
            'desc'=>$this->desc,
            'user_id'=>$this->user_id
        ];
        dd($data);
        $response = $this->create_category($data);
        if ($response) {
            
        } else {
            
        }
        
    }
}
