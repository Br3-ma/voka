
    {{-- @vite('resources/js/app.js') --}}
    
    @stack('modals')

    @livewireScripts
    </body>

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
    </div>
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

        $('.prof-dropdown > a').click(function(e) {
            e.preventDefault();
            $(this).siblings('.dropdown-content').slideToggle();
        });

      });
      /*--------------------
      Vars
      --------------------*/
      // let progress = 50
      // let startX = 0
      // let active = 0
      // let isDown = false

      // /*--------------------
      // Contants
      // --------------------*/
      // const speedWheel = 0.02
      // const speedDrag = -0.1

      // /*--------------------
      // Get Z
      // --------------------*/
      // const getZindex = (array, index) => (array.map((_, i) => (index === i) ? array.length : array.length - Math.abs(index - i)))

      // /*--------------------
      // Items
      // --------------------*/
      // const $items = document.querySelectorAll('.carousel-item')
      // const $cursors = document.querySelectorAll('.cursor')

      // const displayItems = (item, index, active) => {
      //   const zIndex = getZindex([...$items], active)[index]
      //   item.style.setProperty('--zIndex', zIndex)
      //   item.style.setProperty('--active', (index-active)/$items.length)
      // }

      // /*--------------------
      // Animate
      // --------------------*/
      // const animate = () => {
      //   progress = Math.max(0, Math.min(progress, 100))
      //   active = Math.floor(progress/100*($items.length-1))
        
      //   $items.forEach((item, index) => displayItems(item, index, active))
      // }
      // animate()

      // /*--------------------
      // Click on Items
      // --------------------*/
      // $items.forEach((item, i) => {
      //   item.addEventListener('click', () => {
      //     progress = (i/$items.length) * 100 + 10
      //     animate()
      //   })
      // })

      // /*--------------------
      // Handlers
      // --------------------*/
      // const handleWheel = e => {
      //   const wheelProgress = e.deltaY * speedWheel
      //   progress = progress + wheelProgress
      //   animate()
      // }

      // const handleMouseMove = (e) => {
      //   if (e.type === 'mousemove') {
      //     $cursors.forEach(($cursor) => {
      //       $cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`
      //     })
      //   }
      //   if (!isDown) return
      //   const x = e.clientX || (e.touches && e.touches[0].clientX) || 0
      //   const mouseProgress = (x - startX) * speedDrag
      //   progress = progress + mouseProgress
      //   startX = x
      //   animate()
      // }

      // const handleMouseDown = e => {
      //   isDown = true
      //   startX = e.clientX || (e.touches && e.touches[0].clientX) || 0
      // }

      // const handleMouseUp = () => {
      //   isDown = false
      // }

      // /*--------------------
      // Listeners
      // --------------------*/
      // document.addEventListener('mousewheel', handleWheel)
      // document.addEventListener('mousedown', handleMouseDown)
      // document.addEventListener('mousemove', handleMouseMove)
      // document.addEventListener('mouseup', handleMouseUp)
      // document.addEventListener('touchstart', handleMouseDown)
      // document.addEventListener('touchmove', handleMouseMove)
      // document.addEventListener('touchend', handleMouseUp)


      // $(".category").chosen({disable_search_threshold: 10});
    </script>
    <script src="{{ asset('public/assets/js/slider-banner.js') }}"></script>
</html>