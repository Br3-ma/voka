<div class="bg-white">
    @include('layouts.head')
    <section class="w-full bg-cover bg-center mt-0 @if ($biz->cover !== null)  py-32 @else py-8  @endif" style="background-image: linear-gradient(to top right, rgba(0,0,0,0.8), rgba(0,0,0,0.2)), url('{{ asset("storage/app/".$biz->cover) }}');">
        <div class="text-white px-4">
            <h1 class="focus:outline-none xl:text-5xl md:text-3xl text-xl @if ($biz->cover !== null) text-white  @else text-black  @endif font-extrabold mb-6">
                {{ $biz->name }}
            </h1>
            {{-- Average Rating --}}
            <div class="flex items-center">
                @for($i = 1; $i <= 5; $i++)
                    @if(App\Models\BusinessReview::avarage_rating($biz->id) >= $i) 
                        <svg aria-hidden="true" class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    @else
                        <svg aria-hidden="true" class="w-8 h-8 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    @endif
                @endfor
                <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ App\Models\BusinessReview::avarage_rating($biz->id) }} out of 5</p>
            </div>
            {{-- End Average Rating  --}}
            <div class="flex items-center space-x-2 my-2">
                <div class="rounded-lg bg-gray-100 flex px-2">
                    <span class="font-bold text-indigo-600 text-sm"></span>
                </div>
                <div class="rounded-lg bg-gray-100 flex px-2">
                    <span class="font-bold text-indigo-600 text-sm">{{ App\Models\Category::CatName($biz->categories) ?? ''}}</span>
                </div>
            </div>	
            <div class="flex items-center space-x-2 my-2">
                <div class="flex space-x-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                          </svg>
                    </span>
                    <span class="font-bold text-indigo-600 text-sm">Certified</span>
                </div>
                <div class="flex space-x-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch text-red" viewBox="0 0 16 16">
                            <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                            <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
                          </svg>
                    </span>
                    <span class="font-bold text-red-600 text-sm">Opens {{ $biz->start_time ?? '08:00 AM' }} </span>
                </div>
                {{-- <div class="flex space-x-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw text-red" viewBox="0 0 16 16">
                            <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
                          </svg>
                    </span>
                    <span class="font-bold text-red-600 text-sm">Beer & Drinks</span>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="mx-auto mb-8 sm:px-20 py-4">
        <div class="sm:flex">
            <div class="flex-initial sm:w-3/4">
                <div class="flex sm:px-4">
                    <a target="_blank" href="{{ route('write-review', $biz->id) }}" type="button" class="space-x-2 bg-[#840178] text-white inline-flex  border border-[#840178] hover:bg-[#840178] focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-200 dark:text-blue-200 dark:hover:text-white dark:hover:bg-[#840178] dark:focus:ring-red-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 w-4 bi bi-star text-white" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>                        
                        <span class="text-white">Write a Review</span>
                    </a>
                    {{-- <button type="button" class="space-x-2 inline-flex text-red-700 hover:text-white border border-red-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-800 dark:hover:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 w-4 bi bi-camera2" viewBox="0 0 16 16">
                            <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4z"/>
                            <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.972 5.972 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1zM2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0zM14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0z"/>
                        </svg>                        
                        <span>Add a Photo</span>
                    </button>
                    <button type="button" class="space-x-2 inline-flex text-red-700 hover:text-white border border-red-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-800 dark:hover:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 w-4 bi bi-share-fill" viewBox="0 0 16 16">
                            <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                        </svg>                        
                        <span>Share</span>
                    </button>
                    <button type="button" class="space-x-2 inline-flex text-red-700 hover:text-white border border-red-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-800 dark:hover:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 w-4 bi bi-bookmark-fill" viewBox="0 0 16 16">
                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                        </svg>                        
                        <span>Save</span>
                    </button> --}}
                </div>
                
                <div class="w-full">
                    <div class="py-8 px-4 border-b border-gray-300">
                        <h2 class="font-extrabold py-2">Photos & Video</h2>
                        <div class="flex">
							{{-- <div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div>
							<div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div>
							<div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div> --}}
							{{-- <div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div> --}}
                        </div>
                    </div>

                    <div class="py-8 px-4 border-b border-gray-300">
                        <h2 class="font-extrabold py-2">Location & Hours</h2>
                        <div class="flex">
                            <div class="w-1/2">
                                <?php echo $biz->map; ?>
                                @if ($biz->map == null)
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkqlghbcNkltzRmBh8eq7iCn0ahIoi1upT-g&usqp=CAU"/>
                                @endif
                            </div>
                            <div class="w-1/2">
                                <p>Mon 8:30 AM - 5:00 PM</p>
                                <p>Tue 8:30 AM - 5:00 PM <b>Closed now</b></p>
                                <p>Wed 8:30 AM - 5:00 PM</p>
                                <p>Thu 8:30 AM - 6:00 PM</p>
                                <p>Fri 8:30 AM - 6:00 PM</p>
                                <p>Sat 9:00 AM - 1:00 PM</p>
                                <p>Sun 9:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="py-8 px-4 border-b border-gray-300">
                        <h2 class="font-extrabold py-2">You Might Also Consider</h2>
                        <div class="flex">
                            <div class="w-1/4">

                            </div>
                            <div class="w-1/2">
            
                            </div>
                        </div>
                    </div>
                    
                    <div class="py-8 px-4 border-b border-gray-300">
                        <h2 class="font-extrabold py-2">Amenities and More</h2>
                        <div class="flex">
                            <div class="w-1/4">

                            </div>
                            <div class="w-1/2">
            
                            </div>
                        </div>
                    </div>
                    
                    <div class="py-8 px-4 border-b border-gray-300">
                        <h2 class="font-extrabold py-2">Recommended Reviews</h2>
                        <div class="w-full my-3">
                            <div id="task" class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4 border-l-indigo-300 bg-gradient-to-r from-indigo-100 to-transparent hover:from-indigo-200 transition ease-linear duration-150">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-info-circle-fill w-4 h-4 text-purple-500 " viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg>
                                </div>
                                <div class="inline-flex items-center space-x-2">
                                    <p>
                                        <b>Your trust is our top concern,</b> so businesses can't pay to alter or remove 
                                        <br>their reviews. <b class="text-purple-500">Learn more.</b>
                                    </p>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-lg w-4 h-4 text-slate-500 hover:text-slate-700 hover:cursor-pointer" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>                   
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div id="task" class="flex justify-between items-center border py-6 border-slate-200 py-3 px-2 shadow-lg  transition ease-linear duration-150">
                                <div class="inline-flex items-center space-x-2">
                                    @auth
                                    <p class="font-bold text-lg">{{ auth()->user()->fname.' '.auth()->user()->lname }}</p>
                                    @endauth
                                    <p class="text-xs">Lusaka, Zambia</p>
                                </div>
                                <div>
                                    {{-- Average Rating --}}
                                    <div class="flex items-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if(App\Models\BusinessReview::avarage_rating($biz->id) >= $i) 
                                                <svg aria-hidden="true" class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            @else
                                                <svg aria-hidden="true" class="w-6 h-6 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                            @endif
                                        @endfor
                                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ App\Models\BusinessReview::avarage_rating($biz->id) }} out of 5</p>
                                    </div>
                                    {{-- End Average Rating  --}}  
                                    <small>
                                        <a target="_blank" href="{{ route('write-review', $biz->id) }}">
                                            With so few reviews, your opinion of {{ $biz->name }} could be huge. 
                                            <br/>Start your review today.
                                        </a>
                                    </small>                   
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($review !== null)
                    <div class="py-8 px-4 border-b border-gray-300">
                        <div class="w-full flex-col p-2 h-auto border border-1 mt-2 rounded-md border-gray-100 hover:shadow-lg hover:transition ease-in-out duration-400 hover:mt-2">
                            <div class="md:flex-row justify-between w-full">
                                <div class="mt pb-1 flex border-b border-gray-100 justify-start items-center flex-row space-x-2.5">
                                    <div>
                                        @if ($review->reviewer_photo !== null)
                                        <img class="me-2 w-10 h-10 rounded-circle rounded-full" src="{{ asset('public/storage/'.$review->reviewer_photo) }}" alt="girl-avatar" />
                                        @else
                                        <img class="me-2 w-10 h-10 rounded-circle rounded-full" src="data:image/png;base64,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" alt="girl-avatar" />
                                        @endif
                                    </div>
                                    <div class="flex flex-col justify-start items-start space-y-2">
                                        <p class="text-xs font-medium leading-none text-gray-800 dark:text-gray-700">{{ $review->reviewer_name }}</p>
                                        <p class="text-xs leading-none text-gray-600 dark:text-gray-700">Wrote a review | {{ $review->created_at->toFormattedDateString()}}</p>
                                    </div>
                                </div>
                                
                                @include('livewire.__partials.rate-stars-person')
                                <p class="mt-3 text-sm leading-normal text-gray-600 dark:text-gray-700 w-full md:w-9/12 xl:w-5/6">
                                    "{{ $review->review }}" 
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>



            <div class="flex-initial sm:px-4 sm:w-1/4">
                <div class="w-full sticky top-2">
                    <div class="w-full mb-6 p-2 border border-gray-300">
                        <h2 class="font-extrabold text-2xl py-2">Request Information</h2>
                        <small class="pb-2">
                            You can now request information from this business directly from Voookamba
                        </small>
                        <button type="button" class="space-x-2 bg-[#840178] mt-2 text-white inline-flex border border-red-700 hover:bg-[#840178] focus:ring-4 focus:outline-none focus:ring-[#840178] font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-[#840178] dark:text-[#840178] dark:hover:text-white dark:hover:bg-[#840178] dark:focus:ring-[#840178]">                     
                            <span class="text-white">Request Information</span>
                        </button>
                    </div>
                    <div class="w-full mb-6 p-2 border border-gray-300">
                        <div id="task" class="flex justify-between items-center border-b border-slate-200 py-3 px-2 border-l-4  border-l-transparent bg-gradient-to-r from-transparent to-transparent hover:from-slate-100 transition ease-linear duration-150">
                            <div class="inline-flex items-center space-x-2">
                                <div>
                                    <a target="_blank" href="<?php echo $biz->website; ?>">{{ $biz->website }}</a>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                  </svg>                  
                            </div>
                        </div>

                        <div id="task" class="flex justify-between items-center py-3 px-2 border-l-4  border-l-transparent bg-gradient-to-r from-transparent to-transparent hover:from-slate-100 transition ease-linear duration-150">
                            <div class="inline-flex items-center space-x-2">
                                <div>
                                    <h4>Directions</h4>
                                    <h6>{{ $biz->address ?? 'No Address added' }}</h6>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                  </svg>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div wire:poll.50000ms class="w-full">
            <div class="flex justify-start items-start p-4">
                <p class="text-md font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-gray-700 ">Recent Reviews</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="justify-start items-start w-full h-84 overflow-auto">
                    @forelse ($recent_reviews as $review)
                    <div class="w-full justify-start items-start flex-col p-4">
                        <div class="md:flex-row justify-between w-full">
                            <div class="mt flex justify-start items-center flex-row space-x-2.5">
                                <div>
                                    @if ($review->reviewer_photo !== null)
                                    <img class="me-2 lg:w-10 lg:h-10 rounded-circle rounded-full" src="{{ asset('storage/app/public/'.$review->reviewer_photo) }}" alt="girl-avatar" />
                                    @else
                                    <img class="me-2 lg:w-10 w-6 lg:h-10 h-6 rounded-circle rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXh4eGjo6OgoKDk5OTg4OCkpKTY2Ninp6exsbHV1dXc3NzDw8PR0dG+vr6urq63t7fKysrBwcGMZqvqAAAFaUlEQVR4nO2d3ZqjIAxAlSAgirDv/7ILdbprW6dV+Qv9cq46c+X5goCRxK4jCIIgCIIgCIIgCIIgCIIgCIIgCIIoDQBwPQY0979rX05ioNPjZKUcVqS006i777GEzlnJGOv/4/+S1n2L42we7TaWZq59cQkY7bCn9yM52LH2BcYB2u6GbxtIq1seq06+97s5Slf7Mq8C3H72uzla3mQYYTwQwHsYxwYVYRwO+gWG9hTBnRH0iq41xfmcoFdsa2kEcVbQK4qWoijkacG+l6L2ZR8H1AXBvlftBHE6ukw8wqbaF36UU+vElqGRTSqoayH0QWxjnIK7KugVm1gV+XJZsO8XXvvyPxMTwkaCeG2luKNqX/5nLk+kK/inUzAxg9QPU4N9mEJcCH0QsRuKuBD6ICLfncLFDdvGcEIexIOpmTeGtrbCe3TMcr+y6NoSb7n0YPgI8sfEMXaQ+mGKe0WcExiiTtjEbUp/DFFvTeMXC+zLBRmSYQOGXz/TfP9q0Y3Rgn2Pe8XXCXZtuPelPC5LE1C4022xSQz8aYz4yRT5VOqHabQh7kHqgxj7CLwgD2H0MEU/SKOf8pE/4QfiZlPsM+mNqIwp9mzpSkRCEXsq8YcLJ03uDE2EMOJObOIuDFx+C9zCG+CVi1lT5JnSLdeSGbjTF89cuBWZqX3Rp+DLWUXWzk24wk8eG2LIH3x30KcUmcKdu9jnxN6mkb3MC9Nhw2YOJT4B85tymU0A2zvj/Q/gB1YNZtqstrgzf9rBLbhT3J8BcOrX0ifGlPuCWkvohF36V0nWL1Z8SwUi6NmEEsu1DnH9Ic3cdNHaCwB8dMZapZS1xo38C0bnK6G+mXPefV+dM0EQBEEQBEEQBEEQRCuExAwP6MDt1/rPLyBknfTsJmPVIoc1k9gPclHWTG7WbWelALgYnQli/WvHttt/vKpxo2gxtehDo51Rcr8X3ZOpVMbppoIZkr92J2xvNXsb0sS1L/0A0PHZLsMJu/+Ww2JnjvtNBoBw9ordxtI6gXe8Cqdi9P5JKofxAB/AbA93oPtoKe2MLJAgJhkdvQdHJidMvb+ESRa+jaQ0SAarH55Jw7dxZH6w1tbrulHtvMFO5tiryicyQduMfqtjzQ6uoE2m8fngyEw1xznD/LLrKKucuTncYTaJY40utcc7zCZRlKVnnLMNWOMpfLzvyIm81DBT8hRxwVtwo1jwmG0VwYKKJSfRZ8UiAzW+XDtCsUhhVILWFxGKBTrUJ+iaEEP+jgtQ7SZcYTb3OJ2r+gVy71ErhzD/khHd+DGBYtbcRoouSdGGecsU45uzxJO1EW+CtojxZG27ENkkOA1ZWw3XXysCOdeLs5WhOchcbSpq+3nyZsJTtJyLI38Dm8rjlOVv2p6gU3AMJboMJ2ike50ijSXgeAFzego1lqiWxijWWKLWqliw78L5rhdJBEt2zhAVFNlS8qU36EO9BJIKDmXfIsJYOIpsKf39wBPfb0wiWOEbkKALRpEtNV50Q7npxk8ydd7kl1oXK/YfKvOitOyr0WcKZBcrfzMQcp84YbL6wa+8UypD8dWZjCMVy1ctc+1v/D6mttoPwP9kON/G2B9EZ/dBJH/rxiymM8IefuRD8Sf8pEPXZRD0lOyoKesnlB2WQKc57s1kvQOlnwBhouPIeoPsBnwEummJqplZJtxlQd2tc5m6mOJgg2qjwxmAmH7vs/d7+NSEuOLpGeBe8ngVTShBnASi9f0Q0I23OrYDFZaDdSP6u2+XtZD0Vo24Ixr+OSy2tfLRFwC4FnPwlFIOd/zv4DYL3WIJ8B4Q8KpiDIibWNuRIwiCIAiCIAiCIAiCIAiCIAiCIAiiRf4CPHlDC7+BCBEAAAAASUVORK5CYII=" alt="girl-avatar" />
                                    @endif                                
                                </div>
                                <div class="flex flex-col justify-start items-start space-y-2">
                                    <p class="text-xs font-medium leading-none text-gray-800 dark:text-gray-700">{{ $review->reviewer_name }}</p>
                                    <p class="text-xs truncated-paragraph leading-none text-gray-600 dark:text-gray-700">{{ $review->created_at->toFormattedDateString()}}</p>
                                </div>
                            </div>
                             
                            @include('livewire.__partials.rate-stars-person')
                        </div>
                        <div id="menu" class="md:block">
                            <p class="mt-3 text-xs leading-normal text-gray-600 dark:text-gray-700 w-full md:w-9/12 xl:w-5/6">"{{ $review->review }}"</p>
                            {{-- <div class="hidden md:flex mt-3 flex-row justify-start items-start space-x-2">
                                <div>
                                    <img class="rounded-md" src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-1" />
                                </div>
                                <div>
                                    <img class="rounded-md" src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-2" />
                                </div>
                                <div class="hidden md:block">
                                    <img class="rounded-md" src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png" alt="chair-3" />
                                </div>
                                <div class="hidden md:block">
                                    <img class="rounded-md" src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png" alt="chair-4" />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    @empty
                    <div class="w-full justify-start items-start flex-col p-4">
                        <div class="md:flex-row justify-between w-full">
                            <p>No Reviews Found.</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
