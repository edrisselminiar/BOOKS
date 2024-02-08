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
      @include('resourses.navbar')
  </header>



  <section class="pt-16 ">
  <div class="container max-w-xXl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl ">

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
            
            <div class=" mt-4 pb-3"> 
              <a href="{{ route('book.getDownload',$book->id) }}" class=" bg-gray-300 hover:bg-gray-600 text-gray-800 font-bold py-2 pl-10 pr-10 rounded inline-flex items-center ">
                  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                  <span>Download</span>
              </a>
            
              <a href="{{ route('book.readonline',$book->id) }}" class=" bg-gray-300 hover:bg-gray-600 text-gray-800 font-bold py-2 pl-10 pr-10 rounded inline-flex items-center ">
                  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                  <span>read book</span>
              </a>
            
            </div>
                  <!-- @auth

                            @php
                    $userReview = $book->reviews->where('user_id', auth()->id())->first();
                @endphp

                @if(!$userReview)
                    <form action="{{ route('reviews.store', $book->id) }}" method="POST">
                        @csrf
                        <textarea name="review" required></textarea>
                        <input type="number" name="rating" min="1" max="5" required>
                        <button type="submit">Submit Review</button>
                    </form>
                    @endif
                    @endauth



            <div>

             @if($averageRating)
                  <h2>Average Rating: {{ $averageRating }}</h2>
                @endif
                  
                  
                  @foreach ($book->reviews as $review)
                  <div>
                    <h3>{{ $review->user->name }}</h3>
                    <p>{{ $review->review }}</p>
                    <p>Rating: {{ $review->rating }}</p>
                  </div>
                  @endforeach

                  

            </div> -->

              
             


            



              
              
              
          

        </div> 
      </div>

    </div>
  </div>
</section>





</body>
</html>






