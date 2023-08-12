<?php

namespace App\Http\Controllers;

use App\Models\BizCategory;
use App\Models\Business;
use App\Models\Category;
use App\Traits\BusinessTrait;
use App\Traits\SubscriptionTrait;
use App\Traits\UserTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Notifications\WelcomeNewUser;
use Illuminate\Support\Facades\Notification;

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
            DB::beginTransaction();
            $data = $request->toArray();
                
            if(auth()->user()){
                // Create business and set status to inactive
                $b = Business::create([
                    'name' => $data['name'],
                    'user_id' => auth()->user()->id,
                    'category_id' => $data['category_ids'],
                    'sub_category_id' => $data['category_ids'],
                    'status' => 0,
                    'email' =>  $data['email'],
                    'phone1' => $data['phone'],
                    'categories' => json_encode($data['categories'])
                ]);
                if ($request->file('image_path')) {
                    $cover_image = Storage::put('business', $request->file('image_path'));
                    $b->cover = isset($cover_image) ? $cover_image : '';
                    $b->save();
                }
                foreach ($data['categories'] as $key => $value) {
                    BizCategory::create([
                        'businesses_id' => $b->id,
                        'categories_id' => $value
                    ]);
                }
            }else{
                // authenticate user
                $user = $this->registerOwner($request);
                // Create business and set status to inactive
                $b = Business::create([
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

                if ($request->file('image_path')) {
                    $cover_image = Storage::put('business', $request->file('image_path'));
                    $b->cover = isset($cover_image) ? $cover_image : '';
                    $b->save();
                }

                foreach ($data['categories'] as $value) {
                    BizCategory::create([
                        'businesses_id' => $b->id,
                        'categories_id' => $value
                    ]);
                }
            }
            DB::commit();
            // Send an email

            // Send the welcome notification
              
            if(auth()->user()){
                Notification::send(auth()->user(), new WelcomeNewUser());
            }else{
                Notification::send($user, new WelcomeNewUser());
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
            DB::rollback();
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
