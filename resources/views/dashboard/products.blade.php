@extends('layouts.dashboard')

@section('content')
    <div class="px-4 py-2">
        @foreach ($products as $product)
            <div class="flex  mt-3 p-2 w-full justify-between text-xl font-medium bg-slate-200 ">
                <a class="text-black"
                    href="">{{ $product['name'] }}</a>
                <div class="flex">
                    <x-button class="w-fit mx-1 bg-green-700" :data="['title' => 'edit', 'href' => route('dashboard.editProduct', ['id' => $product['id'], app()->getLocale()])]" />
                        <div>
                            <form method="POST" action="{{route('dashboard.deleteProduct', ['id' => $product['id'], app()->getLocale()])}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                              </form>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
