<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  @vite('resources/css/tailwind.css')
 
</head>
<body class="antialiased bg-gray-200">

  <header class="fixed w-[100%] flex flex-wrap items-center px-6 py-2 bg-white lg:px-16 lg:py-0 z-50">

    <div class="flex items-center justify-between flex-1">
      <a href="#">
        <img src="{{ asset('IMG/Book Logo1.svg') }}" alt="My Image" class=" w-36">
      </a>
    </div>

    <label for="menu-toggle" class="block pointer-cursor lg:hidden"><svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="menu">
      <nav class="">
        <ul class="items-center justify-between pt-4 text-base text-gray-700 lg:flex lg:pt-0">
          <li>
            <a href="{{ url('/book') }}"  class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400">Books</a>

            <!-- <a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Features</a> -->
          </li>
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Pricing</a></li>
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Documentation</a></li>
          <li><a class="block px-0 py-3 mb-2 border-b-2 border-transparent lg:p-4 hover:border-indigo-400 lg:mb-0" href="#">Support</a></li>
          <li><a class="block px-0 py-3 mb-2 border-b-2 border-transparent lg:p-4 hover:border-indigo-400 lg:mb-0" href="#">Support</a></li>
          
          <div>
            @if (Route::has('login'))
                <div>
                    @auth
                   
                        <!-- <a href="{{ url('/dashboard') }}" > -->
                              <div class="lg:ml-24">
                                <div class="dropdown">
                                  <button class="dropbtn flex flex-wrap">{{ Auth::user()->name }}
                                    <svg class="w-2 h-2.5 mt-2 ml-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                  </button>
                                    <div class="dropdown-content">
                                      <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                      </x-dropdown-link>

                                  
                                        <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                          </form>
                                  
                                    </div>
                                </div>
                              </div>
                            <!-- </a> -->
                    @else

                        <a href="{{ route('login') }}" >
                          <button class="px-4 py-2 mx-2 ml-24  text-black rounded">
                            Sign In
                          </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >
                              <button class="px-4 py-1 mx-2 mr-0  text-white bg-blue-500 rounded mfont-bold hover:bg-blue-700">
                                Sign Up
                              </button>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
         </ul>
      </nav>
    </div>
  </header>



  <div class="relative bg-gray-50 px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">

  <div class="absolute inset-0">
    <div class="h-1/3 bg-white sm:h-2/3"></div>
  </div>

  <div class="relative mx-auto max-w-7xl">
    <div class="text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Column me neatly.</h2>
      <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
        This is your life and it's ending one minute @ a time...</p>
    </div>
    <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-6">

      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>

      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>

      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>


      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>


      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>



      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>


      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>


      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class=" h-80 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <a href="#" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
            </a>
          </div>
        </div>
      </div>







    </div>
  </div>
</div>









  </body>
</html>















