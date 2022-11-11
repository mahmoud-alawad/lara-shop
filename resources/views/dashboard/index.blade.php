@extends('layouts.dashboard')

@section('content')
    <div class="px-4 py-2">
        <div class="w-4/12">
            <x-button :data="['title'=>'manage products','href'=> route('dashboard.products',app()->getLocale())]"/>
        </div>
    </div>
@endsection
