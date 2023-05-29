<div class="bg-white">
    @include('layouts.head')
    <section class="w-full bg-cover bg-center mt-0 py-32" style="background-image: url('https://source.unsplash.com/random');">
        <div class="text-white px-4">
            <h1 class="focus:outline-none xl:text-5xl md:text-3xl text-xl text-white font-extrabold mb-6">
                {{ $biz->name }}
            </h1>
            @include('livewire.__partials.rate-stars')	
            <div class="flex items-center space-x-2 my-2">
                <div class="rounded-lg bg-gray-100 flex px-2">
                    <span class="font-bold text-indigo-600 text-sm">Food</span>
                </div>
                <div class="rounded-lg bg-gray-100 flex px-2">
                    <span class="font-bold text-indigo-600 text-sm">Restuarant</span>
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
                    <span class="font-bold text-red-600 text-sm">Opens 08:00 AM </span>
                </div>
                <div class="flex space-x-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw text-red" viewBox="0 0 16 16">
                            <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z"/>
                          </svg>
                    </span>
                    <span class="font-bold text-red-600 text-sm">Beer & Drinks</span>
                </div>
            </div>
        </div>
    </section>
    <section class="mx-auto px-16 py-4">
        <div class="flex">
            <div class="flex-initial w-3/4 ...">
              <div class="flex">
                    <a target="_blank" href="{{ route('write-review', $biz->id) }}" type="button" class="space-x-2 bg-red-600 text-white inline-flex  border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star text-white" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>                        
                        <span class="text-white">Write a Review</span>
                    </a>
                    <button type="button" class="space-x-2 inline-flex text-red-700 hover:text-white border border-red-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-800 dark:hover:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera2" viewBox="0 0 16 16">
                            <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4z"/>
                            <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.972 5.972 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1zM2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0zM14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0z"/>
                        </svg>                        
                        Add a Photo
                    </button>
                    <button type="button" class="space-x-2 inline-flex text-red-700 hover:text-white border border-red-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-800 dark:hover:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                            <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                        </svg>                        
                        Share
                    </button>
                    <button type="button" class="space-x-2 inline-flex text-red-700 hover:text-white border border-red-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-800 dark:hover:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                        </svg>                        
                        Save
                    </button>
              </div>
            </div>
            <div class="flex-initial w-1/4">
                <div id="detailed-pricing" class="">
                    <div class="overflow-hidden min-w-max">
                        <div class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 gap-x-16">
                            <div class="text-gray-500 dark:text-gray-400">www.{{$biz->name}}.com </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-600" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 gap-x-16">
                            <div class="text-gray-800 dark:text-gray-400">(585) 394-7800 </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-600" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>                            
                            </div>
                        </div>
                        <div class="grid grid-cols-4 px-4 py-5 text-sm text-gray-700 gap-x-16">
                            <div class="text-purple-600 dark:text-gray-400">
                                <h4>Directions</h4>
                                <h6>{{ $biz->address ?? 'No Address added' }}</h6>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-600" fill="currentColor" class="bi bi-sign-merge-right-fill" viewBox="0 0 16 16">
                                    <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435ZM8.75 6v1c.14.301.338.617.588.95.537.716 1.259 1.44 2.016 2.196l-.708.708-.015-.016c-.652-.652-1.33-1.33-1.881-2.015V12h-1.5V6H6.034a.25.25 0 0 1-.192-.41l1.966-2.36a.25.25 0 0 1 .384 0l1.966 2.36a.25.25 0 0 1-.192.41H8.75Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <h2 class="font-extrabold py-2">Location & Hours</h2>
            <div class="flex">
                <div class="w-1/4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51754.35188643321!2d28.317123114237695!3d-15.394606939190867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408b0dc9c48415%3A0xa09b8a404f8b4101!2sMunali%20Mall!5e0!3m2!1sen!2szm!4v1685403318481!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </div>

        
        <div>
            <h2 class="font-extrabold py-2">You Might Also Consider</h2>
            <div class="flex">
                <div class="w-1/4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51754.35188643321!2d28.317123114237695!3d-15.394606939190867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408b0dc9c48415%3A0xa09b8a404f8b4101!2sMunali%20Mall!5e0!3m2!1sen!2szm!4v1685403318481!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </div>

        
        <div>
            <h2 class="font-extrabold py-2">Amenities and More</h2>
            <div class="flex">
                <div class="w-1/4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51754.35188643321!2d28.317123114237695!3d-15.394606939190867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408b0dc9c48415%3A0xa09b8a404f8b4101!2sMunali%20Mall!5e0!3m2!1sen!2szm!4v1685403318481!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </div>

        
        <div>
            <h2 class="font-extrabold py-2">Recommended Reviews</h2>
            <div class="flex">
                <div class="w-1/4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51754.35188643321!2d28.317123114237695!3d-15.394606939190867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408b0dc9c48415%3A0xa09b8a404f8b4101!2sMunali%20Mall!5e0!3m2!1sen!2szm!4v1685403318481!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
