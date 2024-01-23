<?php

namespace App\Http\Livewire\Dashboard\Tags;

use App\Traits\CatTrait;
use Livewire\Component;

class Create extends Component
{    
    use CatTrait;
    public $name, $desc, $user_id;
    public function render()
    {
        return view('livewire.dashboard.tags.create');
    }

    public function store(){
        $data = [
            'name'=>$this->name,
            'desc'=>$this->desc,
            'user_id'=> auth()->user()->id
        ];
        $response = $this->create_tag($data);
        if ($response) {
            session()->flash('success', 'Ok, '.$this->name.' has been added to tags!');
            return redirect()->route('manage-tags');
        } else {
            session()->flash('error', 'Failed to create tag!');
            return redirect()->route('manage-tags');
        }
    }
}
