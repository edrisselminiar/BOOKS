

<footer class="  text-center" id="my-footer">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="{{ route('/') }}" >
                <img src="{{ asset('IMG/Book Logo1.svg') }}" alt="My Image" class=" w-48 my-4 mx-4">
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ __('public.other') }}</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="{{ url('/book') }}"  class="hover:underline">{{ __('public.All_Books') }}</a>
                      </li>
                      <li class="mb-4">
                        <a href="{{ route('book.getDownload',71) }}" class="hover:underline"> {{ __('public.my_CV') }}</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ __('public.Follow_me') }}</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/edrisselminiar" class="hover:underline ">{{ __('public.Github') }}</a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/in/driss-elminiar-22537723a/" class="hover:underline">{{ __('public.Linkedin') }}</a>
                      </li>
                  </ul>
              </div>
              
          </div>
      </div>

      <hr class="my-6 border-gray-400 lg:my-8 text-center" />
      <div class="">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <span class="text-gray-800"> Driss Elminiar</span> 
          </span>
      </div>
    </div>
</footer>
