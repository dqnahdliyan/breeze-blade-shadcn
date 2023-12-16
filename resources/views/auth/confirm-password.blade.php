<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" :messages="$errors->get('password')" />

        </div>

        <div class="flex justify-end mt-4">
            <x-button type="submit">
                {{ __('Confirm') }}
            </x-button>
        </div>
    </form>
</x-guest-layout>
