@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-danger">
    <strong>{{session('info')}}</strong>
</div>
@endif
@livewire('users')
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);
});
</script>
    @livewireScripts
@stop