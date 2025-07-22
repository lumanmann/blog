<x-guest-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <h2 class="font-black">Register</h2>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" value="Name" />
            <x-input-text id="name" class="block mt-1 w-full" type="text" name="name"
                          :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" value="Email" />
            <x-input-text id="email" class="block mt-1 w-full" type="email" name="email"
                          :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" value="Password" />
            <x-input-text id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Password Confirmation -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" value="Confirm Password" />
            <x-input-text id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button type="submit" class="btn mt-4">
            Register
        </x-primary-button>

    </form>
</x-guest-layout>
