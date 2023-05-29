@include('layouts.head')
    <section class="w-full bg-cover bg-center -mt-10 py-32" style="background-image: url('{{asset("public/img/1.jpg")}}');">
        <div class=" mx-auto text-center text-white">
            <h1 class="focus:outline-none xl:text-5xl md:text-3xl text-xl text-center text-white font-extrabold mb-6">
                Read reviews. Write reviews.
                <br/>
                Find companies you can trust.
            </h1>
            {{-- <p class="text-xl mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio,
                gravida pellentesque urna varius vitae.</p> --}}
            <a target="_bank" href="{{ route('register') }}" class="bg-[#840178] text-white py-4 px-12 rounded-full hover:bg-purple-400">Get Started</a>
        </div>
    </section>

    <section class="text-gray-900 py-8 px-24 bg-white">
        <div class="flex justify-center items-center p-4">
            <p class="text-xl font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-gray-700 ">Recent Reviews</p>
        </div>
        <div class="flex space-x-2 mx-auto">

            @include('__partials.recent-all-reviews')
            
        </div>
    </section>

    {{-- Call To Action --}}
    <section class="py-16 bg-white" style="font-family: 'Lato', sans-serif">
        <div  class="container m-auto space-y-8 text-gray-500 md:px-12 lg:px-20">
            <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
                <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                    <h1 class="focus:outline-none xl:text-5xl md:text-3xl text-xl text-gray-800 font-extrabold mb-5 pt-4">Every review comes with <span class="text-blue-500">a story</span></h1>
                    <p class="text-lg">Be part of millions people around the world to review top brands, businesses and companies.</p>
                    <div class="flex flex-row-reverse flex-wrap justify-center gap-4 md:gap-6 md:justify-end">
                        <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-xl transition bg-gray-700 shadow-xl hover:bg-gray-600 active:bg-gray-700 focus:bg-gray-600 sm:w-max">
                            <span class="block text-white font-semibold">
                                Start buying
                            </span>
                        </button>
                        <button type="button" title="more about" class="w-full order-first py-3 px-6 text-center rounded-xl bg-gray-100 transition hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-200 sm:w-max">
                            <span class="block text-gray-600 font-semibold">
                                More about
                            </span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
                    <div class="col-span-2 row-span-4">
                        <img src="https://tailus.io/sources/blocks/ecommerce-site/preview/images/products/kushagra.webp" class="rounded-full" width="640" height="960" alt="shoes" loading="lazy">
                    </div>
                    <div class="col-span-2 row-span-2">
                        <img src="https://tailus.io/sources/blocks/ecommerce-site/preview/images/products/iman.webp" class="w-full h-full object-cover object-top rounded-xl" width="640" height="640" alt="shoe" loading="lazy">
                    </div>
                    <div class="col-span-3 row-span-3">
                        <img src="https://tailus.io/sources/blocks/ecommerce-site/preview/images/products/daniel.webp" class="w-full h-full object-cover object-top rounded-xl" width="640" height="427" alt="shoes" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Code block starts -->
    {{-- <section class="pb-16" style="font-family: 'Lato', sans-serif">
        <dh-component>
            <div class="container mx-auto pt-16">
                <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
                    <h1 tabindex="0" class="focus:outline-none xl:text-5xl md:text-3xl text-xl text-center text-gray-800 font-extrabold mb-5 pt-4">Partnerships with Coveted Brands</h1>
                    <p tabindex="0" class="focus:outline-none text-base md:text-lg lg:text-xl text-center text-gray-600 font-normal xl:w-10/12 xl:mx-auto">Our success has come from being committed to the property and investing in the development of the product to maximize sales. At the same time and maintaining the integrity.</p>
                </div>
                <div class="xl:py-16 lg:py-16 md:py-16 sm:py-16 px-15 flex flex-wrap">
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r :border-r border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/adidas-dark.png" alt="Adidas" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/channel-dark.png" alt="Chanel" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b border-gray-200 xl:pb-10 pb-16 pt-4 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/nike-dark.png" alt="Nike" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center lg:border-b xl:border-b lg:border-l xl:border-l border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/toyota-dark.png" alt="Toyota" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/gs1-dark.png" alt="GS1" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/berry-dark.png" alt="BlackBerry" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/min-dark.png" alt="Mini" role="img" />
                    </div>
                    <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l border-gray-200 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/honda-dark.png" alt="Honda" role="img"  />
                    </div>
                </div>
            </div>
        </dh-component>
    </section> --}}
@include('layouts.footer')
