@extends('layouts.app')

@section('content')
    <div class="container mt-10">
       <div class="w-full p-4 mx-auto max-w-lg bg-white ">
        <form method="POST" action="{{route('product.create',app()->getLocale())}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    product name </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    product description
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                    value="{{ old('description') }}" />

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-primary text-white rounded py-2 px-4 hover:bg-black">
                    Create product
                </button>

                <a href="/" class="text-black ml-4"> Home </a>
            </div>
        </form>
       </div>
    </div>
@endsection
