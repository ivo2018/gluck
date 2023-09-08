@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Administraciomn</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-info">
    <strong>{{session('info')}}</strong>
</div>
@endif
    <style>
        .container{
            display: flex;
            justify-content: space-around;
        
        }
        .codigo{
            text-align: center;
        }
        .buttons{
            display: flex;
       
        }
        button ,a{
            margin:10px;
            border-radius: 8px;
        }
    </style>
    <div class="container">
        @foreach ($codigosiva as $codigo)
        <div>
            <div class="codigo">
                <h1>{{$codigo->nombre}}</h1>
            </div>
            <div class="buttons">
            <a class="btn btn-light" href="{{route('admin.codigosiva.index')}}">Volver a  codigos</a>
            <a class="btn btn-info" href="{{route('admin.codigosiva.edit',['codigo' => $codigo])}}">Editar curso</a>
            <form action="{{route('admin.codigosiva.destroy',$codigo)}}"  method="POST">
                @csrf
                @method('delete')  
                <button class="btn btn-danger" type="submit">
                    Eliminar codigo
                </button>

            </div>
 
    </div>
        @endforeach
      
    </div>

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


