@forelse ($recent_reviews as $review)
<div class="w-1/4 justify-start items-start flex-col p-4 border border-1 mt-2 rounded-sm border-gray-200">
    <div class="md:flex-row justify-between w-full">
        <div class="mt flex justify-start items-center flex-row space-x-2.5">
            <div>
                <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
            </div>
            <div class="flex flex-col justify-start items-start space-y-2">
                <p class="text-xs font-medium leading-none text-gray-800 dark:text-gray-700">{{ $review->reviewer_name }}</p>
                <p class="text-xs leading-none text-gray-600 dark:text-gray-700">{{ $review->created_at->toFormattedDateString()}}</p>
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