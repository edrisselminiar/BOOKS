<!DOCTYPE html>
<html lang="en">
<head>
        @include('admin.resourses.head')
        <title>Dashboard</title>
        @vite(['resources/css/app.css','resources/js/app.js'])


</head>

<body class="text-gray-800 font-inter w-full">
    @include('admin.resourses.siderbar')
    
    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main ">
        @include('admin.resourses.navbar')

        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 sm:p-5 antialiased m-0 p-0 w-full">
            <div class="mx-auto max-w-screen-2xl">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden  ">
                    
               
                    <form class="px-8 mt-2  mb-10 w-full" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                        <div class="mb-5 w-full ">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">title book</label>
                            <input type="text" name="title" id="text" class=" bg-gray-50 border w-full  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="book" required>
                        </div>
                        <div class="mb-5 w-full">
                            <label for="description" class="w-full block mb-2 text-sm font-medium text-gray-900 dark:text-white">description book</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full h-20 t-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="description ..."></textarea>
                        </div>
                        
                        <div class="mb-5 w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload img</label>
                            <input  name="img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Download the book image</div>   
                        </div class="mb-5 w-full">

                        <div class="mb-5 w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload pdf</label>
                            <input name="pdf" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Download the book pdf</div>

                        </div>
                        <div class="mb-5 w-full"> 
                            <button type="submit" class=" hover:bg-blue-700 bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" >
                                Add book
                            </button>

                        </div>
                     

                

                  
                    </form>

                    
                </div>
            </div>
        </section>
       
        



        
    </main>
    <!-- end: Main -->


<script src="{{ asset('admincss/dist/js/script.js') }}"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>     
</html>