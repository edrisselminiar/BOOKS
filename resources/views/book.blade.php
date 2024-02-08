<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/tailwind.css')
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

 
</head>
<body class="antialiased  bg-gray-200">

  <header class="fixed w-[100%] flex flex-wrap items-center px-6 py-2 bg-white lg:px-16 lg:py-0 z-50">
    @include('resourses.navbar')
  </header>




  <div class="container mx-auto bg-gray-200 px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">

      <div class="absolute inset-0">
        <div class="h-1/3 sm:h-2/3"></div>
      </div>




      <div class="relative"> 
        
        <form action="{{ route('searchbook') }}" method="GET">
            <div class="flex">
                <div class="relative w-full mt-1 sm:mt-4 md:mt-3 lg:mt-0 xl:mt-0">
                    <input type="text" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search book dawnload and read online ..." required>
                    <button  type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    
                    

        <div  class="mt-3 sm:mt-4 md:mt-10 lg:mt-16 xl:mt-10 grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-6  gap-4">

          @foreach ($books as $book)      
                <div class="flex flex-col overflow-hidden rounded-lg shadow-xl shadow-inherit bg-white  transform transition duration-500 ease-in-out hover:scale-105">
                  <div class="flex-shrink-0 px-2 pt-2">
                  <img src="/books/img/{{ $book->img }}"  class="aspect-w-16 aspect-h-9 w-full object-cover rounded-md" alt=""> 
                  </div>
                  <div class="flex flex-1 flex-col justify-between bg-white mx-2">
                    <div class="flex-1 flex justify-between mt-1 pb-2 sm:pb-0 md:pb-2 lg:pb-0 xl:pb-0 ">
                      <a type="button" href="{{ route('book.show',$book->id) }}" class="flex">
                          <p class="text-xs sm:text-xs md:text-xs lg:text-xs     font-semibold text-gray-900 h-6 my-1 mx-1">
                              {{ $book->title }}</p>
                          <a href="{{ route('book.show',$book->id) }}" class=" bg-blue-600 hover:bg-blue-400 text-white rounded text-xs h-6 px-1 py-1 ml-1 mb-1 my-1">
                                Dawnload
                          </a>
                      </a>
                    </div>
                  </div>
                </div>
            @endforeach

        </div>
        
        <div class="mt-4 ml-2 mr-2">
          {{ $books->links('pagination::tailwind') }}
        </div>
  </div>



</div>





</body>
</html>



