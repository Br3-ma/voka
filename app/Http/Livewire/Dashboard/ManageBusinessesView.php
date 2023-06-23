<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\BusinessTrait;
use Livewire\Component;

class ManageBusinessesView extends Component
{
    use BusinessTrait;
    public function render()
    {
        $all_businesses = $this->get_all_businesses();
        return view('livewire.dashboard.manage-businesses-view',[
            'all_businesses'=> $all_businesses
        ]);
    }


    public function delete($id){

    }

    public function deleteBulk( ){

    }
}
