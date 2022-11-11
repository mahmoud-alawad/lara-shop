@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="w-[calc(100vw-20%)] max-w-lg mt-10 p-8 mx-auto bg-white rounded-xl">
            <div class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">{{ __('login') }}</h2>
                <p class="mb-4">{{ __('log to your account') }}</p>
            </div>

            <form method="POST" action="{{ route('login.user', app()->getLocale()) }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">{{ __('email') }}</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        {{ __('password') }}
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                        value="{{ old('password') }}" />

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-primary text-white rounded py-2 px-4 hover:bg-black">
                        {{ __('login') }} </button>
                </div>

                <div class="mt-8">
                    <p>
                        {{ __('don' . "'" . 't have an account') }} ?
                    </p>
                    <a href="{{ route('register', app()->getLocale()) }}" class="text-primary">{{ __('registration') }}</a>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="ml-1 btn bg-primary" href="{{  route('login.facebook', app()->getLocale()) }}" style="margin-top: 0px !important;background: blue;color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
                        <i class="fa-brands fa-facebook" aria-hidden="true"></i> Login with Facebook
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
