<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Traits\BusinessTrait;
use App\Traits\SubscriptionTrait;
use App\Traits\UserTrait;
use Illuminate\Http\Request;

class AddBusinessController extends Controller
{
    use BusinessTrait, UserTrait, SubscriptionTrait;
    public $biz_name, $biz_email, $biz_phone;
    /**
     * Display a listing of the resource.
     */
    public function firstStep(){
        $subscriptions = $this->get_all_subs();
        return view('pick-subscription',[
            'subscriptions' => $subscriptions
        ]);
    }

    public function secondStep(Request $request){
        $amount = $request->query('amount');
        $type = $request->query('type');
        $categories = Category::get();
        return view('add-business',[
            'amount' => $amount,
            'type'=> $type,
            'categories'=> $categories,
            'state' => 'ok',
            'used_email' => ''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->toArray();
                
            if(auth()->user()){
                // Create business and set status to inactive
                $convertedArray = array_map('intval', $data['categories']);
                Business::create([
                    'name' => $data['name'],
                    'user_id' => auth()->user()->id,
                    'category_id' => $data['category_ids'],
                    'sub_category_id' => $data['category_ids'],
                    'status' => 0,
                    'email' =>  $data['email'],
                    'phone1' => $data['phone'],
                    'categories' => json_encode($data['categories'])
                ]);
            }else{
                $user = $this->registerOwner($request);
                // Create business and set status to inactive
                
                $convertedArray = array_map('intval', $data['categories']);
                Business::create([
                    // 'cover',
                    'name' => $data['name'],
                    'user_id' => $user->id,
                    'category_id' => $data['category_ids'],
                    'sub_category_id' => $data['category_ids'],
                    // 'description' => $name,
                    'status' => 0,
                    // 'address' => $data['address'],
                    'email' =>  $data['email'],
                    'phone1' => $data['phone'],
                    // 'phone2' => $name,
                    // 'country' => $name,
                    // 'sector' => $name,
                    'categories' => json_encode($data['categories']) 
                ]);
            }

            return view('payment-summary',[
                'biz_name' => $data['name'],
                'biz_email' => $data['email'],
                'biz_phone' => $data['phone'],
                'amount' => $data['amount'],
                'type' => $data['type'],
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'email' => $data['email'],
                'state' => 'ok'
            ]);
        } catch (\Throwable $th) {
            dd($th);
            $categories = Category::get();
            return view('add-business',[
                'amount' => $data['amount'],
                'type' => $data['type'],
                'categories' => $categories,
                'state' => 'error',
                'used_email' => $data['username']
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
