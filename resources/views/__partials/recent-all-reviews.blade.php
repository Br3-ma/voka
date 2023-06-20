@forelse ($recent_reviews as $review)
<div class="w-1/4 flex-col p-2 h-auto border border-1 mt-2 rounded-md border-gray-100 hover:shadow-lg hover:transition ease-in-out duration-400 hover:mt-4">
    <div class="md:flex-row justify-between w-full">
        <div class="mt pb-1 flex border-b border-gray-100 justify-start items-center flex-row space-x-2.5">
            <div>
                @if ($review->reviewer_photo !== null)
                <img class="me-2 w-10 h-10 rounded-circle rounded-full" src="{{ asset('public/storage/'.$review->reviewer_photo) }}" alt="girl-avatar" />
                @else
                <img src="" alt="girl-avatar" />
                @endif
            </div>
            <div class="flex flex-col justify-start items-start space-y-2">
                <p class="text-xs font-medium leading-none text-gray-800 dark:text-gray-700">{{ $review->reviewer_name }}</p>
                <p class="text-xs leading-none text-gray-600 dark:text-gray-700">Wrote a review | {{ $review->created_at->toFormattedDateString()}}</p>
            </div>
        </div>
        @if ($review->business !== null && $review->business->cover !== null)
        <div class="mt-1" style="
            position: relative;
            background-position:center;
            background-size: cover;
            width: 100%;
            height: 20vh;
            border-radius: 10px;
            background-image: url('{{ asset("public/storage/".$review->business->cover) }}');">
        </div>
        @else
        <div class="mt-1" style="
            position: relative;
            width: 100%;
            height: 20vh;
            border-radius: 10px;
            background-image: url('data:image/jpeg;base64,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');">
        </div>
        @endif
        @if ($review->business !== null)
            <h6 class="text-md my-4 mx-1 font-extrabold leading-none text-purple-800 dark:text-purple-900">
                {{ $review->business->name ?? '' }}
            </h6>            
        @endif
        @include('livewire.__partials.rate-stars-person')
        <p class="truncated-paragraph mt-3 text-xs leading-normal text-gray-600 dark:text-gray-700 w-full md:w-9/12 xl:w-5/6">
            "{{ $review->review }}" 
        </p><span><a href="#" class="text-purple-500 font-bold text-sm">Continue reading</a></span>

    </div>
</div>
@empty
<div class="w-full justify-start items-start flex-col p-4">
    <div class="md:flex-row justify-between w-full">
        <p>No Reviews Found.</p>
    </div>
</div>
@endforelse