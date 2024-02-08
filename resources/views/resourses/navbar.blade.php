

<div class="flex items-center justify-between flex-1">
      <a href="{{ route('homme') }}" >
        <img src="{{ asset('IMG/Book Logo1.svg') }}" alt="My Image" class=" w-36">
      </a>
    </div>

    <label for="menu-toggle" class="block pointer-cursor lg:hidden"><svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
    <input class="hidden" type="checkbox" id="menu-toggle" />


    <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="menu">
      <nav class="">
        <ul class="items-center justify-between pt-4 text-base text-gray-700 lg:flex lg:pt-0">
          <li><a href="{{ url('/book') }}"  class="ml-6 lg:ml-0 block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400">Books</a></li>
          <li><a class="ml-6 lg:ml-0 block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">@lang('public.title')</a></li>
          <li><a class="ml-6 lg:ml-0 block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">Documentation</a></li>       
          <li><a class="ml-6 lg:ml-0 block px-0 py-3 border-b-2 border-transparent lg:p-4 hover:border-indigo-400" href="#">{{ __('public.title') }}</a></li>       
          <li>
            <a class=" ml-2 lg:ml-0  block px-0 py-1 border-b-2 border-transparent lg:p-2 hover:border-indigo-400" href="#">                 
                <select id="countries" class="outline-none border-none my-1 pl-4" onchange="window.location.href=this.value;">
                  <option selected>{{ __('language') }}</option>
                  <option value="{{ url('setlocale/en') }}">{{ __('English') }} </option>
                  <option value="{{ url('setlocale/ar') }}">{{ __('Arabic') }}</option>
                  <option value="{{ url('setlocale/fr') }}">{{ __('French') }}</option>
                </select>
            </a>
          </li>
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





