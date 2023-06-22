<?php

namespace App\Http\Controllers;

use App\Traits\SubscriptionTrait;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use SubscriptionTrait;

    public function index(){
        $top_subscribers = $this->get_top5_subscribers();    
        return view('dashboard',[
            'top_subscribers' => $top_subscribers
        ]); 
    }
}
