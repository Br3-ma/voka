<div class="bg-white">
    <div class="lg:flex">
        <div class="lg:w-3/4 w-full">
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
        <div wire:poll.50000ms class="lg:w-1/4">
            <div class="flex justify-start items-start p-4">
                <p class="text-md font-bold leading-7 lg:leading-9 text-gray-800 dark:text-gray-700 ">Recent Reviews</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="justify-start items-start w-full h-84 overflow-auto">
                    @forelse ($recent_reviews as $review)
                    <div class="w-full justify-start items-start flex-col p-4">
                        <div class="md:flex-row justify-between w-full">
                            <div class="mt flex justify-start items-center flex-row space-x-2.5">
                                <div>
                                    @if ($review->reviewer->type == 'owner' && $review->reviewer_photo !== null)
                                        <img class="me-2 w-6 h-6 xl:w-10 xl:h-10 lg:w-10 lg:h-10 rounded-circle rounded-full" src="{{ asset('storage/app/public/'.$review->reviewer_photo) }}" alt="girl-avatar" />
                                    @elseif ($review->reviewer_photo !== null)
                                        <img class="me-2 w-6 h-6 xl:w-10 xl:h-10 lg:w-10 lg:h-10 rounded-circle rounded-full" src="{{ asset('storage/app/'.$review->reviewer_photo) }}" alt="girl-avatar" />
                                    @else
                                        <img class="me-2 w-6 h-6 xl:w-10 xl:h-10 lg:w-10 lg:h-10 rounded-circle rounded-full" src="data:image/png;base64,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" alt="girl-avatar" />
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
    </div>
    @include('layouts.footer')
</div>

