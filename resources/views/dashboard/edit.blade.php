@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit product</h2>
            <p class="mb-4">Edit: <span class="text-primary">{{ $product['name'] }}</span> </p>
        </header>

        <form method="POST" action="{{ route('dashboard.updateProduct',[ 'id'=>$product['id'],app()->getLocale()]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">{{ $product['name'] }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    placeholder="Example: Senior Laravel Developer" value="{{ $product['name'] }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">{{ $product['description'] }}</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"
                    value="{{ $product['description'] }}" />

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    {{ $product['imgpath'] }}
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
                <img class="w-48 mr-6 mb-6" src="{{ url('public/image/' . $product['imgpath']) }}" alt="" />
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <button class="bg-primary text-white rounded py-2 px-4 hover:bg-black">
                    Update product
                </button>

                <a href="" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
@endsection
