@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion</h1>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
@stop

@section('js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        console.log('Hi!');
    </script>
    @livewireScripts
@stop
