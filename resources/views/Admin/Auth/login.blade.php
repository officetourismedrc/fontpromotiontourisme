<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="block-3" :status="session('status')" />

    {{-- <h1> {{session('status')}}</h1> --}}
    {{-- <h1>admin panel</h1> --}}

    <form method="POST" action="{{ route('admin.check.login') }}">
        @csrf
<div class="form-design">

    <div>
        <h2 class="section__title">{{__('Admin Panel Login')}}</h2>
    </div>
        <!-- Email Address -->
        <div class="input-item">
            
            <x-text-input id="email" class="input-item-text" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-label for="email" :value="__('Email')" class="label-input"   />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-item">
           

            <x-text-input id="password" class="input-item-text"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />
             <x-input-label for="password" :value="__('Password')" class="label-input" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="btn-psw_forgot">
            @if (Route::has('password.request'))
                <a class="pasw-forgot"  href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="button">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

    </div>
    </form>
</x-guest-layout>
