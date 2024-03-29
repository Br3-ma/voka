<div class="flex-wrap">
    @for($i = 1; $i <= 5; $i++)
        <button style="border-radius: 50%;
        background: linear-gradient(145deg, #dcd8dd, #ffffff);
        box-shadow:  5px 5px 9px #f2eef3,
                    -5px -5px 9px #f6f2f7;" wire:click="rate({{ $i }})"
                @if($rating >= $i) 
                    class="sm:px-1 sm:py-1 px-2 pb-2 text-3xl font-extrabold text-center text-[#FFD100] border border-purple-300 rounded-full bg-gradient-to-r from-gray-100 via-white to-gray-100 hover:bg-gradient-to-br focus:ring-4 focus:outline-gray-400 focus:ring-gray-300 dark:focus:ring-gray-800" 
                @else 
                    class="sm:px-1 sm:py-1 px-2 pb-2 text-3xl font-extrabold text-center text-gray-100 rounded-full bg-gradient-to-r from-gray-100 via-white to-gray-100 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800" 
                @endif
        >
            &#9733;
        </button>
    @endfor



    {{-- <svg aria-hidden="true" class="w-16 h-16 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-16 h-16 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-16 h-16 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-16 h-16 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
    <svg aria-hidden="true" class="w-16 h-16 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> --}}
    @switch($rating)
        @case(1)
        <p class="ml-2 text-xl font-medium text-red-500 dark:text-gray-200">Very Bad</p>
        @break
        @case(2)
        <p class="ml-2 text-xl font-medium text-red-500 dark:text-gray-200">Poor</p>
        @break
        @case(3)
        <p class="ml-2 text-xl font-medium text-red-500 dark:text-gray-200">Medium</p>
        @break
        @case(4)
        <p class="ml-2 text-xl font-medium text-red-500 dark:text-gray-200">Good</p>
        @break
        @case(5)
        <p class="ml-2 text-xl font-medium text-red-500 dark:text-gray-200">Excellent, The Best</p>  
        @break
    
        @default
    @endswitch
</div>
