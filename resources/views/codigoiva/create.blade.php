
{{--<x-app-layout>
    
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
    <h1>En esta pagina podras crear un codigo

<form action="{{route('home.store')}}" method="POST" >
    @csrf
    <label>
      {{--    Nombre: <br>--}}
      {{--
      Nombre :  <br>
  <input type="text" name="nombre" value="{{old('nombre')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </label>
<br>
    <label>
       PocentajeIva <br>
    <textarea name="porcentajeIva"  rows="5"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> {{old('porcentajeIva')}}</textarea>
    </label>
    <br>
    <label >
      Formulario
       <br>
       <input type="text" name="formulario" value="{{old('formulario')}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </label>
    <br>
<br>
    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">Enviar Formulario</button>
</form>
</div>
</x-app-layout>
--}}