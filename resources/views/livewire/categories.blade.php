<div>
@include('layouts.head')
<div class="bg-white">
	<div>

  
	  <main class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
		<section aria-labelledby="products-heading" class="pb-24 pt-6">
		  	<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-5">
				<div class="rounded-md px-4 hidden lg:block">
					<div class="sticky top-0">
									
						<div class="py-6">
							<!-- Filter section, show/hide based on section state. -->
							<div class="" id="filter-section-1">
								<div class="space-y-4">
									<h4 class="font-extrabold text-gray-500">Category</h4>
									<form id="categoryFilterForm"  action="{{ route('categories') }}" method="GET">
										
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
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<!-- Product grid -->
				<div class="lg:col-span-4 lg:border-l lg:border-gray-200 lg:pl-4">
					<!-- Breadcrumbs -->
					<div class="max-w-7xl">
						<div class="flex items-center space-x-2 font-extrabold text-gray-400 text-xs">
							<a href="#" class="hover:underline hover:text-gray-600">Lusaka</a>
							<span>
								<svg class="h-3 w-3 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</span>
							<a href="#" class="hover:underline hover:text-gray-600">
								@if ($query !== "")
								{{ $query }}
								@else
								All
								@endif
							</a>
							{{-- <span>
								<svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</span>
							<span>Headphones</span> --}}
						</div>
						@if ($query !== "")
						<h1 class="text-xl capitalize font-extrabold">{{ $query }} in Lusaka</h1>
						@else
						<h1 class="text-xl capitalize font-extrabold">Best in Lusaka</h1>
						@endif
						<button type="button" onclick="openFilterBar()" class="lg:hidden fixed bottom-4 right-4 bg-purple-800 text-white px-4 py-2 rounded-full hover:bg-purple-600">
							Open Filters
						</button>
					</div>
					<!-- ./ Breadcrumbs -->
				
					{{-- Ad - Promo Section --}}
					@if (empty($selectedCategories))
					{{-- <div class="border-dashed border-2 mt-2 rounded-lg border-gray-200 p-4 py-4 flex w-full">
						<div class="w-3/4">
							<h3 class="font-bold">Free price estimates from local Auto Repair pros</h3>
							<small>Tell us about your project and get help<br>from sponsored businesses.</small>
							<br>
							<button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-6">
								Get Started
							</button>
						</div>
						<div class="1/4">
							<img width="100" class="flex-end" src="https://img.freepik.com/free-vector/pay-balance-owed-abstract-concept-vector-illustration-making-credit-payment-pay-owed-money-bank-irs-balance-due-debt-consolidation-management-taxpayer-bill-abstract-metaphor_335657-4342.jpg?w=740&t=st=1680693567~exp=1680694167~hmac=17d733b3fcb2ebeadc66ac3b7cb2ca148323827668d209c321f5fffb06f3f0ec">
						</div>
					</div> --}}
					@endif
					{{-- ./ Ad - Promo Section --}}
					@forelse ($biz as $b)
					<div style="box-shadow: rgba(0, 0, 0, 0.032) 1.95px 1.95px 2.6px;" class="max-w-7xl border-b py-4 mx-auto px-4 sm:px-6 lg:px-8 mt-6">
						<a target="_blank" href="{{ route('business-detail', $b->id)}}" class="flex flex-col md:flex-row -mx-4">
							
							<div class="px-2">
								@if ($b->cover !== null)
									<img class="rounded-lg bg-gray-100 w-40 h-40" src="{{ asset('storage/app/'.$b->cover) }}" alt="Book Cover">
								@else
									<img class="rounded-lg bg-gray-100 w-40 h-40" src="data:image/jpeg;base64,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">
								@endif
							</div>
							
							<div class="md:flex-1 p-3">
								<h3 class="leading-tight tracking-tight font-bold text-dark text-lg md:text-lg">{{ $b->name }}</h3>
								
								{{-- Average Rating --}}
								<div class="flex items-center">
									@for($i = 1; $i <= 5; $i++)
										@if(App\Models\BusinessReview::avarage_rating($b->id) >= $i) 
											<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
										@else
											<svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
										@endif
									@endfor
									<p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ App\Models\BusinessReview::avarage_rating($b->id) }} out of 5</p>
								</div>
								{{-- End Average Rating  --}}

								<div class="flex items-center space-x-2 my-2">
									<div class="rounded-lg bg-gray-100 flex px-2">
										<span class="font-bold text-indigo-600 text-sm">{{ App\Models\Category::CatName($b->categories)}}</span>
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
										<span class="font-bold text-red-600 text-sm">Opens {{ $b->start_time ?? '08:00 AM' }}  </span>
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
						
								<p class="text-gray-500 flex space-x-2">
									<span class="mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
											<path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
										  </svg>
									</span>
									<span class="text-black">
										{{ $b->review->first() ? $b->review->first()->review : 'No review yet' }} 
									</span>
								</p>
								
							</div>
						</a>
						<div class="w-full">
							<a target="_blank" href="{{ $b->website ?? '#' }}" type="button" class=" py-2.5 px-5 mt-2 text-xs font-bold text-purple-900 focus:outline-none bg-white rounded-lg border border-purple-200 hover:text-purple-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:hover:text-gray">
								<div class="flex gap-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
										<path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
									</svg>
									View Website
								</div>
							</a>
						</div>
					</div>
					@empty
						
					@endforelse($biz)

					{{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
						<div class="flex flex-col md:flex-row -mx-4">
							
							<div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div>
							
							<div class="md:flex-1">
								<h3 class="leading-tight tracking-tight font-extrabold text-dark text-xl md:text-xl">Hungry Lion.</h3>
								<p class="text-gray-500 text-sm"> <a href="#" class="text-indigo-600 hover:underline">Food</a></p>
								@include('livewire.__partials.rate-stars')
								<div class="flex items-center space-x-4 my-2">
									<div>
										<div class="rounded-lg bg-gray-100 flex py-2 px-3">
											<span class="text-indigo-400 mr-1 mt-1">$</span>
											<span class="font-bold text-indigo-600 text-3xl">25</span>
										</div>
										</div>
										<div class="flex-1">
										<p class="text-green-500 text-xl font-semibold">Save 12%</p>
										<p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
									</div> 
								</div>
						
								<p class="text-gray-500">
									“So, I called a couple of times and left a message today. They called me back and make sure I have an appointment today. The time was right on point. My car has an engine light on so…” more
								</p>
								<hr>
								<button type="button" class="fl-right py-2.5 px-5 mr-2 mt-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:text-gray-400 dark:border-gray-600 dark:hover:text-gray">
									View Website
								</button>
							</div>
						</div>
					</div>
					<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
						<div class="flex flex-col md:flex-row -mx-4">
							
							<div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div>
							
							<div class="md:flex-1">
								<h3 class="leading-tight tracking-tight font-extrabold text-dark text-xl md:text-xl">Hungry Lion.</h3>
								<p class="text-gray-500 text-sm"> <a href="#" class="text-indigo-600 hover:underline">Food</a></p>
						
								<div class="flex items-center space-x-4 my-2">
									@include('livewire.__partials.rate-stars')
								</div>
						
								<p class="text-gray-500">
									“So, I called a couple of times and left a message today. They called me back and make sure I have an appointment today. The time was right on point. My car has an engine light on so…” more
								</p>
								<hr>
								<button type="button" class="fl-right py-2.5 px-5 mr-2 mt-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:text-gray-400 dark:border-gray-600 dark:hover:text-gray">
									View Website
								</button>
							</div>
						</div>
					</div> --}}
				</div>
		  	</div>
		</section>
	  </main>
	  @include('livewire.__partials.filterbar')
	</div>
  </div>
@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	
	// $('.filterbar').hide();
	// Submit the form whenever a checkbox is checked or unchecked
	$(document).ready(function() {
		$('input[name="category[]"]').on('change', function() {
			$('#categoryFilterForm').submit();
		});
	  

		$('input[name="category[]"]').on('change', function() {
		var selectedCategories = [];
		$('input[name="category[]"]:checked').each(function() {
			selectedCategories.push($(this).val());
		});

		var url = new URL(window.location.href);

		url.searchParams.delete('category'); // Clear existing category parameters
		selectedCategories.forEach(function(category) {
			url.searchParams.append('category[]', category);
		});

		window.history.replaceState(null, null, url);
		});

		// $('.closeFilter').on('click', function() {
		// 	$('.filterbar').hide();
		// });
	});
	function openFilterBar() {
		document.getElementById('filterBar').classList.remove('translate-y-full');
	}

	function closeFilterBar() {
		document.getElementById('filterBar').classList.add('translate-y-full');
	}
  </script>
</div>

