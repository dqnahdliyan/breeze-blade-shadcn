<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />
            <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="new-password" :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation"
                required autocomplete="new-password" :messages="$errors->get('password_confirmation')" />

        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button type="submit">
                {{ __('Reset Password') }}
            </x-button>
        </div>
    </form>
</x-guest-layout>
