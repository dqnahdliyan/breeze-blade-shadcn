<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" :messages="$errors->get('password')" />

        </div>

        <!-- Remember Me -->
        <div class="flex justify-between mt-4">
            <x-checkbox id="remember_me" name="remember">{{ __('Remember me') }}</x-checkbox>
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('register'))
                <a class='text-sm text-gray-600 rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800'
                    href="{{ route('register') }}">
                    {{ __('Don\'t have an account?') }}
                </a>
            @endif
            <x-button type='submit'>
                <x-lucide-log-in /><span>{{ __('Log in') }}</span>
            </x-button>
        </div>
    </form>
</x-guest-layout>
