<div class="bg-white">
    @include('layouts.head-plain')
    <div class="flex items-center justify-center w-screen min-h-screen bg-gray-100 text-gray-800 p-3">
        <!-- Component Start -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 w-full max-w-screen-lg">
            <div class="lg:col-span-2">
                <h2 class="text-sm font-medium">Business Details</h2>
                <div class="bg-white rounded mt-4 shadow-lg">
                    <div class="flex items-center px-8 py-5">
                        <label class="text-sm font-medium ml-4">{{ $biz_name }}</label>
                    </div>
                    <div class="border-t">
                        {{-- <div class="flex items-center px-8 py-5">
                            <label class="text-sm font-medium ml-4">Credit Card</label>
                        </div> --}}
                        <div class="grid grid-cols-2 gap-4 px-8 pb-8">
                            <div class="col-span-2">
                                <label class="text-xs font-semibold" for="cardNumber">Contact Phone Number</label>
                                <p>{{ $biz_phone }}</p>
                            </div>
                            <div class="">
                                <label class="text-xs font-semibold" for="cardNumber">Email Address</label>
                                <p>{{ $biz_email }}</p>
                            </div>
                            <div class="">
                                <label class="text-xs font-semibold" for="cardNumber">Categories</label>
                                <p>Business</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-4 bg-white mt-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-center bg-blue-600 text-sm font-medium w-full h-10 rounded text-blue-50 hover:bg-blue-700">Continue to Dashboard</a>
                </div>
            </div>
            <div>
                <h2 class="text-sm font-medium">Purchase Summary</h2>
                <div class="bg-white rounded mt-4 shadow-lg py-6">
                    <div class="px-8">
                        <div class="flex items-end">
                            <select class="text-sm font-medium focus:outline-none -ml-1" name="" id="">
                                <option value="">Product (Billed Monthly)</option>
                                <option value="">Product (Billed Annually)</option>
                            </select>
                            <span class="text-sm ml-auto font-semibold">K{{ $amount }}</span>
                            <span class="text-xs text-gray-500 mb-px">/mo</span>
                        </div>
                        <span class="text-xs text-gray-500 mt-2">Save 20% with annual billing</span>
                    </div>
                    <div class="px-8 mt-4">
                        <div class="flex items-end justify-between">
                            <span class="text-sm font-semibold">Tax</span>
                            <span class="text-sm text-gray-500 mb-px">10%</span>
                        </div>
                    </div>
                    <div class="px-8 mt-4 border-t pt-4">
                        <div class="flex items-end justify-between">
                            <span class="font-semibold">Today you pay (ZMW)</span>
                            <span class="font-semibold">K{{ $amount }}</span>
                        </div>
                        {{-- <span class="text-xs text-gray-500 mt-2">After 1 month free: $22/mo.</span> --}}
                    </div>
                    <div class="flex items-center px-8 mt-8">
                        <input id="termsConditions" type="checkbox">
                        <label class="text-xs text-gray-500 ml-2" for="termsConditions">I agree to the terms and conditions.</label>
                    </div>
                    <div class="flex flex-col px-8 pt-4">
                        <a href="{{ route('dashboard') }}" class="flex items-center justify-center bg-blue-600 text-sm font-medium w-full h-10 rounded text-blue-50 hover:bg-blue-700">Start Subscription</a>
                        <button class="text-xs text-blue-500 mt-3 underline">Have a coupon code?</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Component End  -->
    </div>
</div>