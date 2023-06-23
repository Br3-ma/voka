<div class="bg-white">
    <div class="bg-white flex ">
        <div class="w-3/4">
            <div class="max-w-sm w-full lg:max-w-full">
                <div class="p-8 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                        </svg>
                        Verified
                    </p>
                    <div class="text-gray-900 font-extrabold text-2xl mb-2">{{ $biz->name }}</div>
                    <a href="#" class="text-blue-500 text-base">Read our review guidelines</a>
                    </div>
                    <div class="py-2">
                        @include('livewire.__partials.rate-stars-edit')
                    </div>
                    <div class="flex items-center">
                        
                        <textarea wire:model.defer="review" class="form-control" cols="70" rows="10">
                        </textarea>
                    </div>
                    <div class="mt-2">
                        <button wire:click="publish()" type="button" class="space-x-2 bg-red-500 text-white inline-flex  border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-800">
                            <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star text-white" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>                        
                            <span class="text-white">Post Review</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div wire:poll.50000ms class="w-1/4">
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
                                    <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
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
    </div>
    @include('layouts.footer')
</div>

