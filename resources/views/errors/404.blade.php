@extends('layouts.app')

@section('content')
    <div class="container mt-10 p-6 bg-primary text-white">
        <div class="mx-auto text-3xl font-bold text-center">
            404
        </div>
        <div class="text-md font-medium text-center">
            Not found
        </div>
        <a href="{{ route('home',app()->getLocale()) }}" class="mx-auto bg-white px-4 py-2 text-primary">back to home</a>
    </div>
@endsection
