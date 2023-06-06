<?php

namespace App\Http\Controllers;

use App\Traits\ReviewTrait;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    use ReviewTrait;

    public function index(){
        $recent_reviews   = $this->get_all_reviews();
        return view('welcome',[
            'recent_reviews' => $recent_reviews
        ]);
    }
}
