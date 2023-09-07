<x-app-layout>
    {{--
<style>
    .container{
        display: flex;
        justify-content: center;
        margin: auto;
        margin-top: 50px;
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
<form action="{{route('home.update', $codigosiva)}}"  method="POST">
    @csrf
    @method('PUT')

    <label>
        Nombre :{{$codigosiva->nombre}}
        <br>
       <input type="text" name="nombre" value="{{old('nombre',$codigosiva->nombre)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
    </label>

    <label>
    <br>
    porcentajeIva : {{$codigosiva->porcentajeIva}}<br>

    <textarea name="porcentajeIva"  rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >

     {{old('poorcentajeIva',$codigosiva->porcentajeIva)}}
    </textarea>
    </label>
    <br>
    <label >
      Formulario : {{$codigosiva->formulario}}
       <br>
       <input type="text" name="formulario"  value="{{old('formulario',$codigosiva->formulario)}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    </label>

    <br>
    <button type="submit">Enviar Formulario</button>
</form>
</div>
</x-app-layout>
--}}