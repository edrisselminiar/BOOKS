<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />



  <style>
      #menu-toggle:checked + #menu {
        display: block;
      }
  </style>
</head>
<body class="antialiased bg-gray-200">

  <header class="flex flex-wrap items-center px-6 py-2 bg-white lg:px-16 lg:py-0">

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
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Features</a></li>
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Pricing</a></li>
          <li><a class="block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Documentation</a></li>
          <li><a class="block px-0 py-3 mb-2 border-b-2 border-transparent lg:p-4 hover:border-indigo-400 lg:mb-0" href="#">Support</a></li>
          <li><a class="block px-0 py-3 mb-2 border-b-2 border-transparent lg:p-4 hover:border-indigo-400 lg:mb-0" href="#">Support</a></li>




          <li>
  
          


          <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown hover <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
      </li>
    </ul>
</div>


          
          
</li>
      
          


<div>
            @if (Route::has('login'))
                <div>
                    @auth
                   
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>
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
  test










  </body>
</html>
