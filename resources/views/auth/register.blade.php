<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="firstName" :value="__('First Name')" />

                <x-text-input id="firstName" class="mt-1 block w-full" type="text" name="firstName" :value="old('firstName')"
                    autofocus />
            </div>
            <div>
                <x-input-label for="lastName" :value="__('Last Name')" />

                <x-text-input id="lastName" class="mt-1 block w-full" type="text" name="lastName" :value="old('lastName')"
                    autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="mt-1 block w-full" type="email" name="email"
                    :value="old('email')" />
            </div>
            <!-- Mobile Number -->
            <div class="mt-4">
                <x-input-label for="mobile" :value="__('Mobile Number')" />

                <x-text-input id="mobile" class="mt-1 block w-full" name="mobile" type="number" ondrop="return false;" onpaste="return false;"
                    onkeypress="return event.charCode>=48 && event.charCode<=57" :value="old('mobile')" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="mt-1 block w-full" type="password" name="password"
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password"
                    name="password_confirmation" />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
