@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="w-full mx-auto p-8 mt-10 max-w-lg rounded-md bg-white">
            <div class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">{{ __('registeration') }}</h2>
                <p class="mb-4">{{ __('create an account in our online shop') }}</p>
            </div>

            <form method="POST" action="{{route('create.user', app()->getLocale())}}">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2"> {{ __('name') }} </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                        value="{{ old('name') }}" />

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"> {{ __('email') }}
                    </label>
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
                    <label for="password2" class="inline-block text-lg mb-2">
                        {{ __('confirm password') }}
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                        value="{{ old('password_confirmation') }}" />

                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-primary text-white rounded py-2 px-4 hover:bg-black">
                        {{ __('sign up') }}
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        {{ __('already have an account') }}?
                        <a href="{{ route('login', app()->getLocale()) }}" class="text-primary">{{ __('login') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
