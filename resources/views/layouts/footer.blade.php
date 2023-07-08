
    {{-- @vite('resources/js/app.js') --}}
    
    @stack('modals')

    @livewireScripts
    </body>
    <section class="bg-gray-900 text-white">
      <div
        class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
      >
        <div class="mx-auto max-w-3xl text-center">
          <h1
            class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
          >
          Be heard
    
            <span class="sm:block"> CoverFlow - Angels. </span>
          </h1>
    
          <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
            Read reviews. Write reviews. Find companies.
          </p>
    
          <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a
              class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
              href="{{ route('categories') }}"
            >
              Get Started
            </a>
            <div x-data="{ modelOpen: false }">
                    {{-- <a @click="modelOpen =!modelOpen" 
                      class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                      href="#"
                    >
                      Open Modal
                    </a> --}}
            
                @include('layouts.__partials.footer-modal')
            </div>
            
          </div>
        </div>
      </div>
    </section>
    
    <!-- component -->
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">
    
      <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com" class="hover:underline" target="_blank">Flowbite™</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 sm:mt-0">
          <li>
            <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">About</a>
          </li>
          <li>
            <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy
              Policy</a>
          </li>
          <li>
            <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Licensing</a>
          </li>
          <li>
            <a href="#" class="text-sm text-gray-500 hover:underline dark:text-gray-400">Contact</a>
          </li>
        </ul>
      </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      $(document).ready(function() {
        var maxLength = 90; // Maximum number of characters
        var maxLength2 = 300; // Maximum number of characters
        var truncationText = '...'; // Truncation indicator

        $('.truncated-paragraph').each(function() {
          var content = $(this).text();
          if (content.length > maxLength) {
            $(this).text(content.substring(0, maxLength) + truncationText);
          }
        });

        $('.truncated-paragraph-less').each(function() {
          var content = $(this).text();
          if (content.length > maxLength2) {
            $(this).text(content.substring(0, maxLength) + truncationText);
          }
        });

      });
      /*--------------------
      Vars
      --------------------*/
      let progress = 50
      let startX = 0
      let active = 0
      let isDown = false

      /*--------------------
      Contants
      --------------------*/
      const speedWheel = 0.02
      const speedDrag = -0.1

      /*--------------------
      Get Z
      --------------------*/
      const getZindex = (array, index) => (array.map((_, i) => (index === i) ? array.length : array.length - Math.abs(index - i)))

      /*--------------------
      Items
      --------------------*/
      const $items = document.querySelectorAll('.carousel-item')
      const $cursors = document.querySelectorAll('.cursor')

      const displayItems = (item, index, active) => {
        const zIndex = getZindex([...$items], active)[index]
        item.style.setProperty('--zIndex', zIndex)
        item.style.setProperty('--active', (index-active)/$items.length)
      }

      /*--------------------
      Animate
      --------------------*/
      const animate = () => {
        progress = Math.max(0, Math.min(progress, 100))
        active = Math.floor(progress/100*($items.length-1))
        
        $items.forEach((item, index) => displayItems(item, index, active))
      }
      animate()

      /*--------------------
      Click on Items
      --------------------*/
      $items.forEach((item, i) => {
        item.addEventListener('click', () => {
          progress = (i/$items.length) * 100 + 10
          animate()
        })
      })

      /*--------------------
      Handlers
      --------------------*/
      const handleWheel = e => {
        const wheelProgress = e.deltaY * speedWheel
        progress = progress + wheelProgress
        animate()
      }

      const handleMouseMove = (e) => {
        if (e.type === 'mousemove') {
          $cursors.forEach(($cursor) => {
            $cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`
          })
        }
        if (!isDown) return
        const x = e.clientX || (e.touches && e.touches[0].clientX) || 0
        const mouseProgress = (x - startX) * speedDrag
        progress = progress + mouseProgress
        startX = x
        animate()
      }

      const handleMouseDown = e => {
        isDown = true
        startX = e.clientX || (e.touches && e.touches[0].clientX) || 0
      }

      const handleMouseUp = () => {
        isDown = false
      }

      /*--------------------
      Listeners
      --------------------*/
      document.addEventListener('mousewheel', handleWheel)
      document.addEventListener('mousedown', handleMouseDown)
      document.addEventListener('mousemove', handleMouseMove)
      document.addEventListener('mouseup', handleMouseUp)
      document.addEventListener('touchstart', handleMouseDown)
      document.addEventListener('touchmove', handleMouseMove)
      document.addEventListener('touchend', handleMouseUp)


      $(".category").chosen({disable_search_threshold: 10});
    </script>
</html>