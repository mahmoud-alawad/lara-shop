@extends('layouts.app')

@section('content')
    <div class="container">
        our products
    </div>
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
        @foreach ($products as $product)
            <div class="flex shadow-2xl overflow-hidden rounded-xl">
                <div href="" class="max-h-xl">
                    <img class="w-full h-full object-cover" src="{{  url('public/Image/'.$product['imgpath']) }}" alt="">
                    {{-- <img class="object-cover w-full h-full" src="https://picsum.photos/400/200" alt=""> --}}
                </div>
                <div class="px-6 py-4">
                    <a class="text-3xl font-medium">{{ $product['name'] }}</a>
                    <div class="mt-4 w-10/12">{{ $product['description'] }}</div>
                    <div class="mt-6">
                        <button class="bg-primary px-3 py-2 text-white">add to cart </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
