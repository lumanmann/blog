<x-guest-layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <h2 class="font-black">Log In to Your Account</h2>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" value="Email" />
            <x-input-text id="email" class="block mt-1 w-full" type="email" name="email"
                          :value="old('email')" autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" value="Password" />
            <x-input-text id="password" class="block mt-1 w-full" type="password" name="password"
                          :value="old('password')" autofocus />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-primary-button type="submit" class="btn mt-4">Log in</x-primary-button>

    </form>
</x-guest-layout>
