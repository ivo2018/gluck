@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion</h1>
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
        justify-content: center;
      text-align: center;
        margin: auto;
        margin-top: 50px;
      
    }
    label{
        display: block;
        justify-content: center;
        text-align: center;
     
    }
    input{
     height: 35px;
     width: 300px;
    }


    #button{
        background-color: rgba(82, 73, 73, 0.466);
        border-radius:5px;
        color: rgb(37, 36, 33);
        padding: 4px;
        
    }
</style>
    <div class="container">
        <h1>En esta pagina podras crear un codigo
    <div>
        {!! Form::open(['route'=>'admin.codigosiva.store'])!!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de el codigo']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('porcentajeIva', 'PorcentajeIva') !!}
            {!! Form::text('porcentajeIva', null, ['class'=>'form-control','placeholder'=>'Ingrese el porcentaje de iva']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('formulario', 'Formulario') !!}
            {!! Form::text('formulario', null, ['class'=>'form-control','placeholder'=>'Ingrese el formulario']) !!}
        </div>
        {!! Form::submit('Crear codigo', ['class'=> 'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>
    
    {{--<form action="{{route('admin.codigosiva.store')}}" method="POST" >
        @csrf
        <label>
          {{--    Nombre: <br>--}}{{--
          Nombre :  <br>
      <input type="text" name="nombre" value="{{old('nombre')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </label>
    <br>
        <label>
           PocentajeIva <br>
        <input name="porcentajeIva"  value="{{old('porcentajeIva')}}" rows="5"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> {{old('porcentajeIva')}}</textarea>
        </label>
        <br>
        <label >
          Formulario
           <br>
           <input type="text" name="formulario" value="{{old('formulario')}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </label>
        <br>
    <br>
        <button  class="btn btn-info " type="submit">Enviar Formulario</button>
    </form>
    </div>
    --}}
  
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
