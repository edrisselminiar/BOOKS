<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/tailwind.css')
</head>
<body class="">





<section class="bg-gray-200 min-h-screen flex items-center justify-center p-3 ">
  <!-- login container -->
  

  <div class=" bg-white flex rounded-2xl shadow-lg max-w-4xl p-3 items-center">
    <!-- form -->
    
    <div class="md:w-2/3  sm:w-3/3 px-8 md:px-8">
      <h2 class="font-bold text-2xl text-[#002D74]">{{ __('public.Sign_In') }}</h2>

      <!-- <form action="" > -->

      <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
        @csrf

        <input class="p-2 pl-3 mt-8 rounded-xl border" type="email" name="email" placeholder="Email">
        <div class="relative">
          <input class="p-2 pl-3 rounded-xl border w-full" type="password" name="password" placeholder="Password">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
          </svg>
        </div>

        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">{{ __('public.Sign_In') }}</button>
      </form>

     

      <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
        <a href="#">{{ __('public.Forgot_your_password') }}?</a>
      </div>

      <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
        <p>{{ __('public.Dont_have_an_account') }}?</p>
        <a href="{{ route('register') }}">
        <button class="sm:px-5 sm:py-3  py-1 px-2 bg-[#002D74] text-white border rounded-xl hover:scale-110 duration-300">
        {{ __('public.Sign_Up') }}
        </button></a>
      </div>
    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="books/img/2131735959.png" alt="" style="min-height: 50vh;">
    </div>
  </div>
</section>


</body>
</html>