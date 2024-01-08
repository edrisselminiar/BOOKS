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
        <h2 class="text-lg font-medium text-black">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

  
    <button class=" bg-red-800 mt-4 hover:bg-gray-500  text-white inline-flex items-center justify-center rounded-md border border-primary px-5 py-2 text-center text-base font-medium text-primary active:bg-blue-light-3  border-black-3 disabled:bg-gray-3 disabled:text-dark-5 dark:hover:text-dark-3">
            {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>








    
</body>
</html>



