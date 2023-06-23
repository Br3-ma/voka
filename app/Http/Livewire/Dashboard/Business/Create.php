<?php

namespace App\Http\Livewire\Dashboard\Business;

use App\Traits\CatTrait;
use Livewire\Component;

class Create extends Component
{
    use CatTrait;
    public function render()
    {
        $all_categories = $this->get_categories();
        return view('livewire.dashboard.business.create',[
            'categories'=>$all_categories
        ]);
    }
}
