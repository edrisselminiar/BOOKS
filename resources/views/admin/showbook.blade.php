<!DOCTYPE html>
<html lang="en">
<head>
        @include('admin.resourses.head')
        <title>Dashboard</title>
        @vite(['resources/css/app.css','resources/js/app.js'])


</head>

<body class="text-gray-800 font-inter">
    @include('admin.resourses.siderbar')
    
    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        @include('admin.resourses.navbar')


        <section class="bg-gray-50 dark:bg-gray-900 sm:p-5 antialiased mx-2 my-2">
            <div class="mx-auto max-w-screen-2xl">


        <form action="{{ route('books.show',$book->id) }}" method="POST">
            @csrf
                <div >
                    <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Book Name</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ $book->title }}
                        </dd>
                    </div>     
                    <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Auther book</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ $book->author }}
                        </dd>
                    </div>
                    <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Type book</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ $book->type }}
                        </dd>
                    </div>               
                    <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Size book</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ $book->size }} MO
                        </dd>
                    </div>
                    <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Number book</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ $book->number }} page
                        </dd>
                    </div>
                    
                    <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Description</dt>
                        <dd class="flex items-center text-gray-500 dark:text-gray-400">
                            {{ $book->description }}
                        </dd>
                    </div>


                    <dl class="grid grid-cols-2 gap-4 mb-4">
                        <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Book cover image</dt>
                            <dd class="flex items-center text-gray-500 dark:text-gray-400">
                                <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                                    <img src="/books/img/{{ $book->img }}" width="200px"> 
                                </div>
                            </dd>
                            <dd class="flex items-center text-gray-500 dark:text-gray-400">
                                <a  href="{{ route('books.getDownload',$book->id) }}"   class="inline-flex w-full items-center text-white justify-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <!-- <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" />
                                    </svg> -->
                                    Dawnload Book Pdf
                                </a>
                            </dd>
                        </div>



                        <!-- <div class="col-span-2 p-3 mx-2 my-2    bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">dawnload Book pdf</dt>
                            <dd class="flex items-center text-gray-500 dark:text-gray-400">
                                <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                                    <img src="/books/img/{{ $book->img }}" width="200px"> 
                                </div>
                            </dd>
                        </div> -->
                    </dl>



                    

                    
                    
                </div>
        
            </form>


        <!-- Start block -->


        </section>
        </div>
        
    </main>
    <!-- end: Main -->

    <script src="https://cdn.tailwindcss.com"></script>

<script src="{{ asset('admincss/dist/js/script.js') }}"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>