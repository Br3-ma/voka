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
            <form method="POST" action="{{ route('biz-store')}}" class="w-full" enctype="multipart/form-data">
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
                                <label class="PillList-item">
                                    <input type="checkbox" id="cate{{$cat->id}}" name="categories[]" value="{{ $cat->id }}">
                                    <span class="PillList-label">
                                        {{ $cat->name }}
                                        <span class="Icon Icon--checkLight Icon--smallest">
                                        </span><i class="fa fa-check"></i></span>
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
                        <div class="flex gap-2">
                            <div class="w-1/2">
                                <label class="block text-gray-700">First Name</label>
                                <input type="text" name="fname" id="fname" placeholder="Use your email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                            </div>
                            <div class="w-1/2">
                                <label class="block text-gray-700">Last Name</label>
                                <input type="text" name="lname" id="lname" placeholder="Use your email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                            </div>
                        </div>
                        <label class="block text-gray-700">New Username</label>
                        <input type="text" name="username" id="email" placeholder="Use your email" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        
                        <label class="block text-gray-700">New Password</label>
                        <input type="text" name="password" id="password" placeholder="New Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        
                        <label class="block text-gray-700">Confirm Password</label>
                        <input type="text" name="confirmed_password" id="c_password" placeholder="Re-type Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" >
                        <button type="button" class="goto6 text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Continue
                        </button>
                    </div>
                </div>
                <div id="mystep6" class="box-border order-first w-full text-black border-solid md:w-3/4 md:pl-10 md:order-none">
                    <div style="cursor:pointer" class="goto5 flex space-x-2 items-center content-center hover:bg-gradient-to-bl focus:ring-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                        </span>
                        <span>Back to Step 5</span>
                    </div>
                    <h2 class="m-0 text-xl font-extrabold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                        A picture showing your business / company
                    </h2>
                    <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-sm">
                        Upload a Cover Picture.
                    </p>
                    <div class="mt-2">
                        <div class="w-full bg-white p-2 rounded">
                            <div id="upload-form" class="space-y-4">
                              <div class="relative p-2 w-full">
                                <input type="file" id="image-input" name="image_path" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-image text-gray-400 h-8 w-8" viewBox="0 0 16 16">
                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                      </svg>
                                  <span class="text-sm font-medium text-gray-700">Choose a Picture</span>
                                </div>
                              </div>
                              <div id="image-preview" class="hidden mt-4">
                                <img id="preview-img" name="image_photo" class="max-w-full h-auto rounded shadow-md" alt="Image Preview">
                              </div>
                            </div>
                          </div>
                        <button type="submit" class="text-white mt-2 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Done & Dusted
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
        $("#mystep6").hide();
      
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
            $("#mystep6").hide();
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
                $("#mystep6").hide();
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
                $("#mystep6").hide();
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
                $("#mystep6").hide();
            }
        });

        $(".goto5").click(() => {
            // var inputField = document.getElementById("cats");
            // if (inputField.value === '') {
            //     inputField.classList.add("shake");
            //     setTimeout(function() {
            //         inputField.classList.remove("shake");
            //     }, 500);
            // } else {
                $("#mystep1").hide();
                $("#mystep2").hide();
                $("#mystep3").hide();
                $("#mystep4").hide();
                $("#mystep5").show();
                $("#mystep6").hide();
            // }
        });

        $(".goto6").click(() => {
            var inputField = document.getElementById("fname");
            var inputField2 = document.getElementById("lname");
            var inputField3 = document.getElementById("email");
            var inputField4 = document.getElementById("password");
            var inputField5 = document.getElementById("c_password");
            if (inputField.value === '' && inputField2.value === '' && inputField3.value === '' && inputField4.value === '' && inputField5.value === '') {
                inputField.classList.add("shake");
                setTimeout(function() {
                    inputField.classList.remove("shake");
                }, 500);
            } else {
                $("#mystep1").hide();
                $("#mystep2").hide();
                $("#mystep3").hide();
                $("#mystep4").hide();
                $("#mystep5").hide();
                $("#mystep6").show();
            }
        });

        // Uploading Image
        const imageInput = document.getElementById('image-input');
        const imagePreview = document.getElementById('image-preview');
        const previewImg = document.getElementById('preview-img');
        const uploadForm = document.getElementById('upload-form');

        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file) {
            const reader = new FileReader();
            reader.onload = () => {
                previewImg.src = reader.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
            } else {
            imagePreview.classList.add('hidden');
            previewImg.src = '';
            }
        });

        function catID(id){
            const input = document.getElementById('myInput');
            let myArray = [];
            myArray.push(id);

            
            input.value = myArray.join(', '); 
        }
</script>
