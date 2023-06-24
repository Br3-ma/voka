<div class="bg-white">
    @include('layouts.head-plain')
    <section class="w-full bg-white pt-4 pb-4 md:pt-20 md:pb-24">
        <div class="box-border flex flex-col items-center content-center mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row lg:px-4">
    
            <!-- Image -->
            <div style=""
             class="box-border w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                {{-- <img src="" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 "> --}}
            </div>
    
            <!-- Content -->
            <form method="POST" action="{{ route('biz-store')}}" class="w-full">
                @csrf
                <input type="hidden" name="user_id" value="" />
                <input type="hidden" name="amount" value="{{ $amount }}" />
                <input type="hidden" name="type" value="{{ $type }}" />
                <div id="mystep1" class="box-border order-first w-full text-black border-solid md:w-3/4 md:pl-10 md:order-none">
                    <h2 class="m-0 text-xl font-extrabold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        Hello! Let’s start with your business name
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-sm">
                        We’ll use this information to help you claim your Yelp page. Your business will come up automatically if it is already listed.
                    </p>
                    <div class="mt-2">
                        <label class="block text-gray-700">Business Name</label>
                        <input type="text" name="name" id="biz_name" placeholder="Your Business Name" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        
                        <button type="button" class="goto2 text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Continue
                        </button>
                    </div>
                </div>
                <div id="mystep2" class="box-border order-first w-full text-black border-solid md:w-3/4 md:pl-10 md:order-none">
                    <div style="cursor:pointer" class="goto1 flex space-x-2 items-center content-center hover:bg-gradient-to-bl focus:ring-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </span>
                        <span>Back to Step 1</span>
                    </div>
                    <h2 class="m-0 text-xl font-extrabold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        What’s your businesses email address?
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-sm">
                        We’ll send messages to this address, like requests from potential customers. You’ll also use it to login and manage your page. It will not be shared publicly or displayed on your page.                    </p>
                    <div class="mt-2">
                        <label class="block text-gray-700">Business Email Address</label>
                        <input type="text" name="email" id="biz_email" placeholder="Your Business Email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        <button type="button" class="goto3 text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Continue
                        </button>
                    </div>
                </div>
                <div id="mystep3" class="box-border order-first w-full text-black border-solid md:w-3/4 md:pl-10 md:order-none">
                    <div style="cursor:pointer" class="goto2 flex space-x-2 items-center content-center hover:bg-gradient-to-bl focus:ring-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </span>
                        <span>Back to Step 2</span>
                    </div>
                    <h2 class="m-0 text-xl font-extrabold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        Give customers a phone number so they can call your business
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-sm">
                        Add the phone number of <span class='bname'></span> to help customers connect with you.                    
                    </p>
                    <div class="mt-2">
                        <label class="block text-gray-700">Business Phone Number</label>
                        <input type="text" name="phone" id="biz_phone" placeholder="Business Phone Number" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        <button type="button" class="goto4 text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Continue
                        </button>
                    </div>
                </div>
                <div id="mystep4" class="box-border order-first w-full text-black border-solid md:w-3/4 md:pl-10 md:order-none">
                    <div style="cursor:pointer" class="goto3 flex space-x-2 items-center content-center hover:bg-gradient-to-bl focus:ring-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </span>
                        <span>Back to Step 3</span>
                    </div>
                    <h2 class="m-0 text-xl font-extrabold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        Let the Customers search & find your business in specific Categories
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-sm">
                        We’ll use this information to help you claim your Yelp page. Your business will come up automatically if it is already listed.
                    </p>
                    <div class="mt-2">
                        <label class="block text-gray-700">Business Categories</label>
                        <input type="hidden" name="category_ids" id="category_ids" placeholder="Choose" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <div id="selectedCats" class="py-4">

                        </div>
                        <div class="border-t border-gray-200 rounded p-8">
                            <p class="py-4 text-xs">Select categories matching your business/company:</p>
                            @forelse ($categories as $cat)
                                {{-- <span style="pointer:cursor" onclick="catID('{{$cat->id}}')" id="badge-dismiss-yellow" class="pointer inline-flex hover:bg-yellow-100 hover:text-dark items-center px-2 py-2 mr-2 text-sm font-medium text-yellow-800 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                    {{$cat->name}}
                                    <button type="button" class="inline-flex items-center p-0.5 ml-2 text-sm text-yellow-400 bg-transparent rounded-full hover:bg-yellow-200 hover:text-yellow-900 dark:hover:bg-yellow-800 dark:hover:text-yellow-300" data-dismiss-target="#badge-dismiss-yellow" aria-label="Remove">
                                        <svg aria-hidden="true" class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Remove badge</span>
                                    </button>
                                </span> --}}
{{--                                 <div>
                                    <div class="inline-flex items-center px-3 py-1 bg-blue-500 text-white rounded-lg">
                                        <input type="checkbox" id="cate{{$cat->id}}" name="categories[]" value="{{ $cat->id }}" class="form-checkbox h-4 w-4 text-blue-600">
                                        <label class="ml-2" for="cate{{$cat->id}}">{{ $cat->name }}</label>
                                    </div>
                                </div> --}}
                                <label class="PillList-item">
                                    <input type="checkbox" id="cate{{$cat->id}}" name="categories[]" value="{{ $cat->id }}">
                                    <span class="PillList-label">{{ $cat->name }}
                                    <span class="Icon Icon--checkLight Icon--smallest"><i class="fa fa-check"></i></span>
                                
                                    </span>
                                </label>
                            @empty
                                <small>No categories found</small>
                            @endforelse
                        </div>
                        <button type="button" class="goto5 text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Continue
                        </button>
                    </div>
                </div>
                <div id="mystep5" class="box-border order-first w-full text-black border-solid md:w-3/4 md:pl-10 md:order-none">
                    <div style="cursor:pointer" class="goto4 flex space-x-2 items-center content-center hover:bg-gradient-to-bl focus:ring-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </span>
                        <span>Back to Step 4</span>
                    </div>
                    <h2 class="m-0 text-xl font-extrabold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        How you are going to be login into Vokamba
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-sm">
                        You will be using this information to help you login to your Vokamba business dashboard.
                    </p>
                    <div class="mt-2">
                        <div class="flex">
                            <div class="w-1/2">
                                <label class="block text-gray-700">First Name</label>
                                <input type="text" name="fname" id="" placeholder="Use your email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                            </div>
                            <div class="w-1/2">
                                <label class="block text-gray-700">Last Name</label>
                                <input type="text" name="lname" id="" placeholder="Use your email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                            </div>
                        </div>
                        <label class="block text-gray-700">New Username</label>
                        <input type="text" name="username" id="" placeholder="Use your email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        
                        <label class="block text-gray-700">New Password</label>
                        <input type="text" name="password" id="" placeholder="New Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        
                        <label class="block text-gray-700">Confirm Password</label>
                        <input type="text" name="confirmed_password" id="" placeholder="Re-type Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        <button type="submit" class="text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Continue
                        </button>
                    </div>
                </div>
            </form>
            <!-- End  Content -->
        </div>
        
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    var state = '{{ isset($state) }}';
    
        $("#mystep2").hide();
        $("#mystep3").hide();
        $("#mystep4").hide();
        $("#mystep5").hide();
      
        if(state === 'error'){
            toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
            toastr.error('You may have used an email already with an account. {{ $used_email }}', 'Oops.. Try again');
            toastr.options.closeEasing = 'swing';
            toastr.options.closeMethod = 'fadeOut';
            toastr.options.closeDuration = 300;
            toastr.options.progressBar = true;
        }
        $(".goto1").click(() => {
            $("#mystep1").show();
            $("#mystep2").hide();
            $("#mystep3").hide();
            $("#mystep4").hide();
            $("#mystep5").hide();
        });

        $(".goto2").click(() => {
            var inputField = document.getElementById("biz_name");
            $('.bname').html("<strong>"+inputField.value+"</strong>")
            if (inputField.value === '') {
                inputField.classList.add("shake");
                setTimeout(function() {
                    inputField.classList.remove("shake");
                }, 500);
            } else {
                $("#mystep2").show();
                $("#mystep1").hide();
                $("#mystep3").hide();
                $("#mystep4").hide();
                $("#mystep5").hide();
            }
        });

        $(".goto3").click(() => {
            var inputField = document.getElementById("biz_email");
            if (inputField.value === '') {
                inputField.classList.add("shake");
                setTimeout(function() {
                    inputField.classList.remove("shake");
                }, 500);
            } else {
                $("#mystep1").hide();
                $("#mystep2").hide();
                $("#mystep3").show();
                $("#mystep4").hide();
                $("#mystep5").hide();
            }
        });

        $(".goto4").click(() => {
            var inputField = document.getElementById("biz_phone");
            if (inputField.value === '') {
                inputField.classList.add("shake");
                setTimeout(function() {
                    inputField.classList.remove("shake");
                }, 500);
            } else {
                $("#mystep1").hide();
                $("#mystep2").hide();
                $("#mystep3").hide();
                $("#mystep4").show();
                $("#mystep5").hide(); 
            }
        });

        $(".goto5").click(() => {
            $("#mystep1").hide();
            $("#mystep2").hide();
            $("#mystep3").hide();
            $("#mystep4").hide();
            $("#mystep5").show();
        });

    function catID(id){
        const input = document.getElementById('myInput');
        let myArray = [];
        myArray.push(id);

        
        input.value = myArray.join(', '); 
    }
</script>
