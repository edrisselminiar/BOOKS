<div class="block">

   
    <div>


        @auth
            @php
                $userReview = $book->reviews->where('user_id', auth()->id())->first();
            @endphp

            @if(!$userReview)
            <div class="mb-6 bg-gray-200 text-center items-center justify-center h-screen max-w-sm my-4 mx-4 rounded-lg">
                <div class="row">
                    <form class="" action="{{ route('reviews.store', $book->id) }}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <p class=" font-bold ">Add Review</p>
                        </div>
                        <div>
                            <div class="rate ml-6 ">
                                <input type="radio" checked id="star5" class="rate" name="rating" value="5"/>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio"  id="star4" class="rate" name="rating" value="4"/>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" class="rate" name="rating" value="2">
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                        <div class="mt-4 mx-2">
                            <textarea id="message" name="review" rows="2" class="block  mt-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..." required></textarea>
                        </div>
                        <button type="submit"  class=" bg-gray-500 hover:bg-gray-600 text-white font-bold focus:ring-4 focus:outline-none focus:ring-blue-300  rounded-lg text-sm px-4 py-2 my-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Add Rating</button>
                    </form>
                </div>
            </div>

        @endif
        @endauth

    </div>



