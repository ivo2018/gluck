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
<div>
    <div class="card">
        @if($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                               <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>

            </div>
        </div>
      {{--  <div class="card-footer">
            {{$users->links()}}
        </div>
        --}}
        @else
        <div class="card-body">   
            <strong>No hay registros</strong>
        </div>
        @endif
    </div>
</div>
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