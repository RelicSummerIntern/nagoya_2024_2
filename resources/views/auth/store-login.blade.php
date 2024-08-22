<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- 上部に個人用とビジネス用のボタンを配置 -->
    <div class="flex justify-center mb-6">
        <div class="relative w-full max-w-md flex space-x-0">
            <!-- 下線を作成するための要素 -->
            <div class="absolute bottom-0 left-0 right-0 flex">
                <div class="w-1/2 bg-gray-300 h-1"></div>
                <div class="w-1/2 bg-gray-300 h-1"></div>
            </div>
            
            <a href="{{ route('login') }}" class="text-gray-800 px-6 py-3 rounded w-1/2 font-bold text-lg text-center block relative z-10">
                個人用
            </a>
            <a href="#" class="bg-gray-300 text-gray-800 px-6 py-3 rounded w-1/2 font-bold text-lg text-center block relative z-10">
                ビジネス用
            </a>
        </div>
    </div>

    <form method="POST" action="{{ route('store-login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- "新規登録はこちら" ボタンをページ下部に配置 -->
    <div class="flex justify-center mt-8">
        <a href="{{ route('store-register') }}" class="bg-gray-300 text-gray-800 px-6 py-3 rounded w-full max-w-md font-bold text-lg text-center">
            新規登録はこちら
        </a>
    </div>
</x-guest-layout>
