@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @livewire('show-posts', ['title'=> 'Este es un titulo de prueba']);
    </div>
</div>
@endsection
