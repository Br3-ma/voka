<div style="display: none" class="fixed  inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                ></div>
    
                <div x-cloak x-show="modelOpen" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block glass w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                >
            <div
      class="rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8"
      role="alert"
    >
      <div class="flex items-center gap-4">
        <span class="shrink-0 rounded-full bg-blue-400 p-2 text-white">
          <svg
            class="h-4 w-4"
            fill="currentColor"
            viewbox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              clip-rule="evenodd"
              d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
              fill-rule="evenodd"
            />
          </svg>
        </span>
    
        <p class="font-medium text-indigo-500 sm:text-lg">New message!</p>
      </div>
    
      <p class="mt-4 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea quo unde
        vel adipisci blanditiis voluptates eum. Nam, cum minima?
      </p>
    
      <div class="mt-6 sm:flex sm:gap-4">
        <a
          class="inline-block w-full rounded-lg bg-blue-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto"
          href=""
        >
          Take a Look
        </a>
    
        <a
          class="mt-2 inline-block w-full rounded-lg bg-gray-50 px-5 py-3 text-center text-sm font-semibold text-indigo-400 sm:mt-0 sm:w-auto"
          href=""
        >
          Mark as Read
        </a>
      </div>
    </div>
    
                   
                        
                
                    </form>
                </div>
            </div>
        </div>