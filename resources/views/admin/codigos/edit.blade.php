@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion</h1>
@stop

@section('content')
@can('admin.codigosiva.edit')
@if (session('info'))
<div class="alert alert-success">
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
    <h1>En esta pagina podras editar un codigo
<div>
    {!! Form::model($codigo,['route'=>['admin.codigosiva.update',$codigo],'method'=>'put'])!!}
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
    {!! Form::submit('Editar codigo', ['class'=> 'btn btn-info']) !!}
    {!! Form::close() !!}
</div>


  {{--  <div class="container">
        
    <h1>En esta pagina podras editar un codigo
     
        <form action="{{route('admin.codigosiva.update',$codigo)}}"  method="POST">
        @csrf
        @method('PUT')
    
        <label>
            Nombre :{{$codigo->nombre}}
            <br>
           <input type="text" name="nombre" value="{{old('nombre',$codigo->nombre)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
        </label>
    
        <label>
            porcentajeIva : {{$codigo->porcentajeIva}}
            <br>
        <input name="porcentajeIva"  value="   {{old('poorcentajeIva',$codigo->porcentajeIva)}}" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
        </label>
        <br>
        <label >
          Formulario : {{$codigo->formulario}}
           <br>
           <input type="text" name="formulario"  value="{{old('formulario',$codigo->formulario)}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
        </label>
    
        <br>
        <button class="btn btn-info btn-small" type="submit">Enviar Formulario</button>
    </form>
    </div>
--}}
@endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
@stop
