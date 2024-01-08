<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/tailwind.css')
</head>
<body>
    
<section class=" bg-gray-200 px-2 py-2 md:px-12 md:py-4 xl:px-12 xl:py-4 2xl:px-12 2xl:py-4  rounded-md  ">
    <header>
        <h2 class="text-lg font-medium text-black ">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700 ">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="my-6 space-y-6">
        @csrf
        @method('patch')

        <div class="text-black">
            <!-- <label for="name" :value="__('Name')"  /> -->
            <label for="" >Name</label>
            <x-text-input id="name" name="name" type="text" class="mt-1 white w-full bg-white" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <!-- <x-input-label for="email" :value="__('Email')" /> -->
            <label for="">Email</label>
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <!-- <x-primary-button class="bg-black">{{ __('Save') }}</x-primary-button> -->
            <button class=" bg-gray-600 hover:bg-gray-500  text-white inline-flex items-center justify-center rounded-md border border-primary px-5 py-2 text-center text-base font-medium text-primary active:bg-blue-light-3  border-black-3 disabled:bg-gray-3 disabled:text-dark-5 dark:hover:text-dark-3">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('done') }}</p>
            @endif
        </div>
    </form>
</section>


</body>
</html>

