<!-- Filter bar container with slide-up animation -->
<div id="filterBar" class="fixed inset-0 pt-20 z-50 transform translate-y-full transition-transform ease-in-out duration-300">
  <div class="fixed inset-0 bg-black bg-opacity-25"></div>
  
  <div class="relative mx-auto border border-purple-200 rounded-lg flex h-1/2 w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">

    <!-- Header -->
    <div class="flex items-center justify-between px-4">
      <h4 class="text-lg fw-bold font-bold text-purple-800 flex items-center space-x-4 gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
          <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z"/>
        </svg>Filters</h4>
      <button type="button" onclick="closeFilterBar()" class="-mr-2 flex closeFilter h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
        <span class="sr-only">Close menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Filters -->
    <form class="mt-4 border-t p-4 border-gray-200" action="{{ route('categories') }}" method="GET">
      <h5 class="text-purple-500">Categories</h5>
      <div class="px-2 py-3 flex-wrap font-medium text-gray-900">
        @forelse ($categories as $cat)
        <span>
            <label class="PillList-item">
                <input type="checkbox" id="cate{{$cat->id}}" name="category[]" value="{{ $cat->id }}" {{ in_array($cat->id, $selectedCategories) ? 'checked' : '' }}>
                <span class="PillList-label">{{ $cat->name }}
                    <span class="Icon Icon--checkLight Icon--smallest">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                            <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                        </svg>
                    </span>
                </span>
            </label>
        </span>
        @empty
        <div class="flex items-center">
            <label for="filter-category-0" class="ml-3 text-xs text-gray-600">
                No Categories Found
            </label>
        </div>
        @endforelse
      </div>
    </form>
  </div>
</div>