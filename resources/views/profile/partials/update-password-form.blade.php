<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/tailwind.css')
</head>
<body>
    

<section class=" bg-gray-200 px-2 py-2 md:px-12 md:py-4 xl:px-12 xl:py-4 2xl:px-12 2xl:py-4  rounded-md mt-4  ">
    <header>
        <h2 class="text-lg font-medium text-black ">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700 ">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="text-black">
            <!-- <x-input-label for="update_password_current_password" :value="__('Current Password')" /> -->
            <label for="">Current Password</label>
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 white w-full bg-white" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <!-- <x-input-label for="update_password_password" :value="__('New Password')" /> -->
            <label for="">New Password</label>
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <!-- <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" /> -->
            <label for="">Confirm Password</label>
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <!-- <x-primary-button>{{ __('Save') }}</x-primary-button> -->
            <button class=" bg-gray-600 hover:bg-gray-500  text-white inline-flex items-center justify-center rounded-md border border-primary px-5 py-2 text-center text-base font-medium text-primary active:bg-blue-light-3  border-black-3 disabled:bg-gray-3 disabled:text-dark-5 dark:hover:text-dark-3">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>





</body>
</html>



