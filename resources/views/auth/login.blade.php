<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 rounded-lg shadow-md p-6 ">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2 class="text-2xl font-semibold text-center text-gray-800 ">{{ __('Login to Your Account') }}</h2>
        <p class="text-sm text-gray-600 dark:text-gray-400 text-center mt-2">
            {{ __('Enter your credentials to access your account.') }}
        </p>

        <form method="POST" action="{{ route('login') }}" class="mt-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input 
                    id="email" 
                    class="block mt-1 w-full"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username" 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input 
                    id="password" 
                    class="block mt-1 w-full"
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember"
                    >
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline dark:text-indigo-400">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <x-primary-button class="">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
