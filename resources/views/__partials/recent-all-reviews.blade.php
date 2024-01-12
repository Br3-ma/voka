@forelse ($recent_reviews as $review)
<div class="w-full lg:w-1/4 flex-col p-2 h-auto border border-1 mt-2 rounded-md border-gray-100 hover:shadow-lg hover:transition ease-in-out duration-400 hover:mt-2">
    <div class="md:flex-row justify-between w-full">
        <div class="mt pb-1 flex border-b border-gray-100 justify-start items-center flex-row space-x-2.5">
            <div>
                @if ($review->reviewer_photo !== null)
                <img class="me-2 lg:w-10 lg:h-10 rounded-circle rounded-full" src="{{ asset('public/storage/'.$review->reviewer_photo) }}" alt="girl-avatar" />
                @else
                <img class="me-2 lg:w-10 w-6 lg:h-10 h-6 rounded-circle rounded-full" src="data:image/png;base64,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" alt="girl-avatar" />
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
            background-image: url('{{ asset("storage/app/".$review->business->cover) }}');">
        </div>
        {{-- @else
        <div class="mt-1" style="
            position: relative;
            width: 100%;
            height: 20vh;
            border-radius: 10px;
            background-image: url('data:image/jpeg;base64,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');">
        </div> --}}
        @endif
        @if ($review->business !== null)
            <h6 class="text-md my-4 mx-1 font-extrabold leading-none text-purple-800 dark:text-purple-900">
                {{ $review->business->name ?? '' }}
            </h6>            
        @endif
        @include('livewire.__partials.rate-stars-person')
        <p class="
            @if ($review->business !== null && $review->business->cover !== null)
            truncated-paragraph 
            @else
            truncated-paragraph-less
            @endif
            mt-3 text-xs leading-normal text-gray-600 dark:text-gray-700 w-full md:w-9/12 xl:w-5/6">
            "{{ $review->review }}" 
        </p>
        <span>
            @if ($review->business !== null)
            <a target="_blank" href="{{ route('business-detail', [$review->business->id,$review->id])}}" class="text-gray-400 font-bold text-sm">Continue reading</a>
            @endif
        </span>

    </div>
</div>
@empty
<div class="w-full justify-start items-start flex-col p-4">
    <div class="md:flex-row justify-between w-full">
        <p>No Reviews Found.</p>
    </div>
</div>
@endforelse