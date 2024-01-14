<div>
  @include('layouts.__partials.user-navbar')
  <style>
    .custom-file-upload {
        display: inline-block;
        padding: 4%;
        cursor: pointer;
        background-color: #fffbff;
        color: rgb(87, 69, 88);
        border-radius: 100%;
        margin: 2%;
    }
    #prof-image-create {
        display: none;
    }
  </style>
  <main class="bg-gray-100 bg-opacity-25">
  
    <div class="lg:w-8/12 lg:mx-auto mb-8">
  
      <header class="flex flex-wrap items-center p-4 md:py-8">
  
        <div class="w-1/4 md:w-3/12 md:ml-16">
          
          @if (auth()->user()->reviewer_photo !== null)
            <img id="prof-preview-image-before-upload-create" class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full border-2 border-pink-600 p-1" src="{{ asset('storage/app/public/'.auth()->user()->reviewer_photo) }}" alt="girl-avatar" />
          @else
            <img id="prof-preview-image-before-upload-create" class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full border-2 border-pink-600 p-1" src="https://img.freepik.com/free-vector/illustration-user-avatar-icon_53876-5907.jpg?w=2000" alt="girl-avatar" />
          @endif  
            <div class="rounded">
              <label for="prof-image-create" placeholder="Change Picture" class="custom-file-upload">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>
              </label>
              <input type="file" wire:model.defer="pic" id="prof-image-create" name="image_path" class="top-0 left-0"/>
            </div>
        </div>
  
        <!-- profile meta -->
        <div class="w-8/12 md:w-7/12 ml-4">
          <div class="md:flex md:flex-wrap md:items-center mb-4">
            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
              {{ auth()->user()->fname.' '.auth()->user()->lname }}
            </h2>
  
            <!-- badge -->
            <span class="inline-block fas fa-certificate fa-lg text-blue-500 relative mr-6 text-xl transform -translate-y-2" aria-hidden="true">
              <i class="fas fa-check text-white text-xs absolute inset-x-0 ml-1 mt-px"></i>
            </span>
  
            <!-- follow button -->
            {{-- <a href="#" class="bg-blue-500 px-2 py-1 
                          text-white font-semibold text-sm rounded block text-center 
                          sm:inline-block block">Follow</a> --}}
          </div>
  
          <!-- post, following, followers list for medium screens -->
          <ul class="hidden md:flex space-x-8 mb-4">
            <li>
              <span class="font-semibold">{{ $my_reviews->reviews->count() }}</span>
              reviews
            </li>
  
            <li>
              <span class="font-semibold">0</span>
              followers
            </li>
            <li>
              <span class="font-semibold">0</span>
              following
            </li>
          </ul>
  
          <!-- user meta form medium screens -->
          <div class="hidden md:block">
            <h1 class="font-semibold">{{ $user->nickname ?? ''}}</h1>
            <span>{{ $user->ilove ?? ''}}</span>
            <p>{{ $user->about ?? ''}}</p>
          </div>
  
        </div>
  
        <!-- user meta form small screens -->
        <div class="md:hidden text-sm my-2">
          <h1 class="font-semibold">{{ $user->nickname ?? ''}}</h1>
          <span>{{ $user->ilove ?? ''}}</span>
          <p>{{ $user->about ?? ''}}</p>
        </div>
  
      </header>
  
      <!-- posts -->
      <div class="px-px md:px-3">
  
        <!-- user following for mobile only -->
        <ul class="flex md:hidden justify-around space-x-8 border-t 
                  text-center p-2 text-gray-600 leading-snug text-sm">
          <li>
            <span class="font-semibold text-gray-800 block">{{ $my_reviews->reviews->count() }}</span>
            reviews
          </li>
  
          <li>
            <span class="font-semibold text-gray-800 block">0</span>
            followers
          </li>
          <li>
            <span class="font-semibold text-gray-800 block">0</span>
            following
          </li>
        </ul>
  
        <!-- insta freatures -->
        <ul class="flex items-center justify-around md:justify-center space-x-12  
                      uppercase tracking-widest font-semibold text-xs text-gray-600
                      border-t">
          <!-- posts tab is active -->
          <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-700">
            <a class="inline-block p-3" href="#">
              <i class="fas fa-th-large text-xl md:text-xs"></i>
              <span class="hidden md:inline">Reviews</span>
            </a>
          </li>
          <li>
            <a class="inline-block p-3" href="#">
              <i class="far fa-square text-xl md:text-xs"></i>
              <span class="hidden md:inline">Review Draft</span>
            </a>
          </li>
          <li>
            <a class="inline-block p-3" href="#">
              <i class="fas fa-user border border-gray-500
                               px-1 pt-1 rounded text-xl md:text-xs"></i>
              <span class="hidden md:inline">Collections</span>
            </a>
          </li>
        </ul>
        <!-- flexbox grid -->
        <div class="flex flex-wrap -mx-px md:-mx-3">
  
          <!-- column -->
          <div class="w-1/3 p-px md:px-3">
            <!-- post 1-->
            <a href="#">
              <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                <!-- post image-->
                <img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">
  
                <i class="fas fa-square absolute right-0 top-0 m-1"></i>
                <!-- overlay-->
                <div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                  left-0 top-0 hidden">
                  <div class="flex justify-center items-center 
                                      space-x-4 h-full">
                    <span class="p-2">
                      <i class="fas fa-heart"></i>
                      412K
                    </span>
  
                    <span class="p-2">
                      <i class="fas fa-comment"></i>
                      2,909
                    </span>
                  </div>
                </div>
  
              </article>
            </a>
          </div>
  
          <div class="w-1/3 p-px md:px-3">
            <a href="#">
              <!-- post 2 -->
              <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                <img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1498409570040-05bf6d3dd5b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">
  
                <!-- overlay-->
                <div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                  left-0 top-0 hidden">
                  <div class="flex justify-center items-center 
                                      space-x-4 h-full">
                    <span class="p-2">
                      <i class="fas fa-heart"></i>
                      412K
                    </span>
  
                    <span class="p-2">
                      <i class="fas fa-comment"></i>
                      1,993
                    </span>
                  </div>
                </div>
  
              </article>
            </a>
          </div>
  
          <div class="w-1/3 p-px md:px-3">
            <a href="#">
              <article class="post bg-gray-100 text-white relative pb-full  md:mb-6">
                <img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">
                <!-- overlay-->
                <div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                  left-0 top-0 hidden">
                  <div class="flex justify-center items-center 
                                      space-x-4 h-full">
                    <span class="p-2">
                      <i class="fas fa-heart"></i>
                      112K
                    </span>
  
                    <span class="p-2">
                      <i class="fas fa-comment"></i>
                      2,090
                    </span>
                  </div>
                </div>
              </article>
            </a>
          </div>
  
          <div class="w-1/3 p-px md:px-3">
            <a href="#">
              <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                <img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="image">
  
                <i class="fas fa-video absolute right-0 top-0 m-1"></i>
  
                <!-- overlay-->
                <div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                  left-0 top-0 hidden">
                  <div class="flex justify-center items-center 
                                      space-x-4 h-full">
                    <span class="p-2">
                      <i class="fas fa-heart"></i>
                      841K
                    </span>
  
                    <span class="p-2">
                      <i class="fas fa-comment"></i>
                      909
                    </span>
                  </div>
                </div>
  
              </article>
            </a>
          </div>
  
          <div class="w-1/3 p-px md:px-3">
            <a href="#">
              <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                <img class="w-full h-full absolute left-0 top-0 object-cover" src="https://images.unsplash.com/photo-1475688621402-4257c812d6db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="image">
                <!-- overlay-->
                <div class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute 
                                  left-0 top-0 hidden">
                  <div class="flex justify-center items-center 
                                      space-x-4 h-full">
                    <span class="p-2">
                      <i class="fas fa-heart"></i>
                      120K
                    </span>
  
                    <span class="p-2">
                      <i class="fas fa-comment"></i>
                      3,909
                    </span>
                  </div>
                </div>
  
              </article>
            </a>
          </div>
  
        </div>
      </div>
    </div>
  </main>
  @include('layouts.footer')
  <script type="text/javascript">
  $(document).ready(function (e) {
      $('#prof-image-create').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => { 

                $('#prof-preview-image-before-upload-create').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
  </script>
</div>
