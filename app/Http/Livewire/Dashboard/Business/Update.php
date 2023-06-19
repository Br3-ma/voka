<?php

namespace App\Http\Livewire\Dashboard\Business;

use App\Models\Category;
use App\Traits\BusinessTrait;
use App\Traits\CatTrait;
use Livewire\Component;

class Update extends Component
{
    use BusinessTrait, CatTrait;
    public $biz, $categories;

    public function mount($id){
        $this->biz = $this->getBusiness($id);
    }
    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.dashboard.business.update',[
            'biz', $this->biz
        ]);
    }
}
