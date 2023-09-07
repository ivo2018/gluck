@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion</h1>
@stop

@section('content')

    
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
    
    <form action="{{route('admin.codigosiva.store')}}" method="POST" >
        @csrf
        <label>
          {{--    Nombre: <br>--}}
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
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
