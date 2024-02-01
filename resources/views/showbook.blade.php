<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
  @vite('resources/css/tailwind.css')
 
</head>
<body class="antialiased  bg-gray-200 ">

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
          </li>
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Pricing</a></li>
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Documentation</a></li>
          <li><a class="block px-0 py-3 mb-2 border-b-2 border-transparent lg:p-4 hover:border-indigo-400 lg:mb-0" href="#">Support</a></li>
          <li><a class="block px-0 py-3 mb-2 border-b-2 border-transparent lg:p-4 hover:border-indigo-400 lg:mb-0" href="#">Support</a></li>
          
          <div>
            @if (Route::has('login'))
                <div>
                    @auth
                   
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



  <section class="pt-16 ">
  <div class="container max-w-xXl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl ">
    <!-- <div class="bg-white">
      <p class="text-xl pt-2  text-center sm:text-xl font-mono	">book {{ $book->title }}</p>
      <p class="max-w-3xl mx-auto mt-4 text-xl text-center ">Explore the latest features that enhance your learning experience and make it even more exciting.</p>
    </div> -->

    <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center  bg-white rounded-xl">
        
        <div aria-hidden="true" class=" lg:mt-0 p-2">
            <img src="/books/img/{{ $book->img }}" width="500"  class="mx-auto rounded-lg shadow-lg dark-bg-gray-500" style="color:transparent"> 

        </div>
      <div>
        <div class=" space-y-12 text-nowrap text-center ">
            <div class="ml-4 mt-4">
              <h4 class="text-lg font-medium leadi ">Book name : <span class=" text-gray-700">{{ $book->title }}</span></h4>
            </div>
            <div class="ml-4 mt-4">
              <h4 class="text-lg font-medium leadi ">Author of the book : <span class=" text-gray-700"> {{ $book->author }}</span></h4>
            </div>
            <div class="ml-4 mt-4">
              <h4 class="text-lg font-medium leadi ">Book type : <span class=" text-gray-700"> {{ $book->type }}</span></h4>
            </div>
            <div class="ml-4 mt-4">
              <h4 class="text-lg font-medium leadi ">Number of book pages : <span class=" text-gray-700"> {{ $book->number }}</span></h4>
            </div>
            <div class="ml-4 mt-4">
              <h4 class="text-lg font-medium leadi ">Book size : <span class=" text-gray-700"> {{ $book->size }}</span></h4>
            </div>
            <div class="ml-4 mt-4">
              <h4 class="text-lg font-medium leadi ">Book description : <span class=" text-gray-700"> {{ $book->description }}</span></h4>
            </div>

           

        
        <div class="mt-4 mr-6 w-60 ml-6 mb-4"> 
          <a href="{{ route('book.getDownload',$book->id) }}" class=" bg-gray-300 hover:bg-gray-600 text-gray-800 font-bold py-2 pl-10 pr-10 rounded inline-flex items-center ml-4">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
              <span>Download</span>
          </a>
          

        </div>
        </div> 
      </div>

    </div>
  </div>
</section>


</body>
</html>



