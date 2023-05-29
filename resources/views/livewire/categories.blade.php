<div>
@include('layouts.head')
<div class="bg-white">
	<div>
	  <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
		<div class="fixed inset-0 bg-black bg-opacity-25"></div>
  
		<div class="fixed inset-0 z-40 flex">
		  <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
			<div class="flex items-center justify-between px-4">
			  <h2 class="text-lg font-medium text-gray-900">Filters</h2>
			  <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
				<span class="sr-only">Close menu</span>
				<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				</svg>
			  </button>
			</div>
  
			<!-- Filters -->
			<form class="mt-4 border-t border-gray-200">
			  <h3 class="sr-only">Categories</h3>
			  <ul role="list" class="px-2 py-3 font-medium text-gray-900">
				<li>
				  <a href="#" class="block px-2 py-3">Totes</a>
				</li>
  
				<li>
				  <a href="#" class="block px-2 py-3">Backpacks</a>
				</li>
  
				<li>
				  <a href="#" class="block px-2 py-3">Travel Bags</a>
				</li>
  
				<li>
				  <a href="#" class="block px-2 py-3">Hip Bags</a>
				</li>
  
				<li>
				  <a href="#" class="block px-2 py-3">Laptop Sleeves</a>
				</li>
			  </ul>
  
			  <div class="border-t border-gray-200 px-4 py-6">
				<h3 class="-mx-2 -my-3 flow-root">
				  <!-- Expand/collapse section button -->
				  <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
					<span class="font-medium text-gray-900">Color</span>
					<span class="ml-6 flex items-center">
					  <!-- Expand icon, show/hide based on section open state. -->
					  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
					  </svg>
					  <!-- Collapse icon, show/hide based on section open state. -->
					  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
					  </svg>
					</span>
				  </button>
				</h3>
				<!-- Filter section, show/hide based on section state. -->
				<div class="pt-6" id="filter-section-mobile-0">
				  <div class="space-y-6">
					<div class="flex items-center">
					  <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">White</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Beige</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Blue</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Brown</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">Green</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">Purple</label>
					</div>
				  </div>
				</div>
			  </div>
  
			  <div class="border-t border-gray-200 px-4 py-6">
				<h3 class="-mx-2 -my-3 flow-root">
				  <!-- Expand/collapse section button -->
				  <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
					<span class="font-medium text-gray-900">Category</span>
					<span class="ml-6 flex items-center">
					  <!-- Expand icon, show/hide based on section open state. -->
					  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
					  </svg>
					  <!-- Collapse icon, show/hide based on section open state. -->
					  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
					  </svg>
					</span>
				  </button>
				</h3>
				<!-- Filter section, show/hide based on section state. -->

			  </div>
  
			  <div class="border-t border-gray-200 px-4 py-6">
				<h3 class="-mx-2 -my-3 flow-root">
				  <!-- Expand/collapse section button -->
				  <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
					<span class="font-medium text-gray-900">Size</span>
					<span class="ml-6 flex items-center">
					  <!-- Expand icon, show/hide based on section open state. -->
					  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
					  </svg>
					  <!-- Collapse icon, show/hide based on section open state. -->
					  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
					  </svg>
					</span>
				  </button>
				</h3>
				<!-- Filter section, show/hide based on section state. -->
				<div class="pt-6" id="filter-section-mobile-2">
				  <div class="space-y-6">
					<div class="flex items-center">
					  <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">2L</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">6L</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">12L</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">18L</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500">20L</label>
					</div>
  
					<div class="flex items-center">
					  <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
					  <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-gray-500">40L</label>
					</div>
				  </div>
				</div>
			  </div>
			</form>
		  </div>
		</div>
	  </div>
  
	  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<section aria-labelledby="products-heading" class="pb-24 pt-6">
		  	<div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
				<div class="hidden lg:block">
					<h3 class="sr-only">Categories</h3>
					<ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
						<li>
						<a href="#">Totes</a>
						</li>
		
						<li>
						<a href="#">Backpacks</a>
						</li>
		
						<li>
						<a href="#">Travel Bags</a>
						</li>
		
						<li>
						<a href="#">Hip Bags</a>
						</li>
		
						<li>
						<a href="#">Laptop Sleeves</a>
						</li>
					</ul>
		
					<div class="border-b border-gray-200 py-6">
						<h3 class="-my-3 flow-root">
						<!-- Expand/collapse section button -->
						<button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
							<span class="font-medium text-gray-900">Category</span>
							<span class="ml-6 flex items-center">
							<!-- Expand icon, show/hide based on section open state. -->
							<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
							</svg>
							<!-- Collapse icon, show/hide based on section open state. -->
							<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
							</svg>
							</span>
						</button>
						</h3>
						<!-- Filter section, show/hide based on section state. -->
						<div class="pt-6" id="filter-section-1">
						<div class="space-y-4">
							<div class="flex items-center">
							<input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
							<label for="filter-category-0" class="ml-3 text-sm text-gray-600">New Arrivals</label>
							</div>
		
							<div class="flex items-center">
							<input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
							<label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>
							</div>
		
							<div class="flex items-center">
							<input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
							<label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>
							</div>
		
							<div class="flex items-center">
							<input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
							<label for="filter-category-3" class="ml-3 text-sm text-gray-600">Organization</label>
							</div>
		
							<div class="flex items-center">
							<input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
							<label for="filter-category-4" class="ml-3 text-sm text-gray-600">Accessories</label>
							</div>
						</div>
						</div>
					</div>
				</div>
	
				<!-- Product grid -->
				<div class="lg:col-span-3">
					<!-- Breadcrumbs -->
					<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
						<div class="flex items-center space-x-2 text-gray-400 text-sm">
							<a href="#" class="hover:underline hover:text-gray-600">Lusaka</a>
							<span>
								<svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</span>
							<a href="#" class="hover:underline hover:text-gray-600">All</a>
							{{-- <span>
								<svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</span>
							<span>Headphones</span> --}}
						</div>
					</div>
					<!-- ./ Breadcrumbs -->
				
					{{-- Ad - Promo Section --}}
					<div class="border-dashed border-2 mt-2 rounded-lg border-gray-200 p-4 flex w-full">
						<div class="w-3/4">
							<h3 class="font-bold">Free price estimates from local Auto Repair pros</h3>
							<small>Tell us about your project and get help from sponsored businesses.</small>
							<br>
							<button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
								Get Started
							</button>
						</div>
						<div class="1/4">
							<img width="50" class="flex-end" src="https://img.freepik.com/free-vector/pay-balance-owed-abstract-concept-vector-illustration-making-credit-payment-pay-owed-money-bank-irs-balance-due-debt-consolidation-management-taxpayer-bill-abstract-metaphor_335657-4342.jpg?w=740&t=st=1680693567~exp=1680694167~hmac=17d733b3fcb2ebeadc66ac3b7cb2ca148323827668d209c321f5fffb06f3f0ec">
						</div>
					</div>
					{{-- ./ Ad - Promo Section --}}
					@forelse ($biz as $b)
					<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
						<a target="_blank" href="{{ route('business-detail', $b->id)}}" class="flex flex-col md:flex-row -mx-4">
							
							<div class="px-2">
								<img width="200" class="rounded-lg bg-gray-100" src="https://jabulanimall.co.za/wp-content/uploads/2021/01/IMG_20201229_100751-1200x900.jpg">
							</div>
							
							<div class="md:flex-1">
								<h3 class="leading-tight tracking-tight font-extrabold text-dark text-xl md:text-xl">{{ $b->name }}</h3>
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
						
								<p class="text-gray-500 flex space-x-2">
									<span class="mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-quote-fill" viewBox="0 0 16 16">
											<path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM7.194 4.766c.087.124.163.26.227.401.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c.419-.416.672-.831.809-1.22-.269.165-.588.26-.93.26C4.775 7.333 4 6.587 4 5.667 4 4.747 4.776 4 5.734 4c.271 0 .528.06.756.166l.008.004c.169.07.327.182.469.324.085.083.161.174.227.272zM11 7.073c-.269.165-.588.26-.93.26-.958 0-1.735-.746-1.735-1.666 0-.92.777-1.667 1.734-1.667.271 0 .528.06.756.166l.008.004c.17.07.327.182.469.324.085.083.161.174.227.272.087.124.164.26.228.401.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c.42-.416.672-.831.81-1.22z"/>
										  </svg>
									</span>
									<span>
										“{{ $b->description }}” 
									</span>
								</p>
								<hr>
							</div>
						</a>
						<button type="button" class="fl-right py-2.5 px-5 mr-2 mt-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:text-gray-400 dark:border-gray-600 dark:hover:text-gray">
							View Website
						</button>
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
	</div>
  </div>
@include('layouts.footer')
</div>

