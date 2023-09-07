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
<div class="container py-8">
    @foreach ($codigosiva as $codigo)
    <div>
        <div>
            <h1>{{$codigo->nombre}}</h1>
        </div>
        <a href="{{route('codigos')}}">Volver a cursos</a>
        <a href="{{route('home.edit',['codigosiva' => $codigo])}}">Editar curso</a>

        <form action="{{route('home.destroy',$codigo)}}"  method="POST">
            @csrf
            @method('delete')  
            <button type="submit">
                Eliminar codigo
            </button>
        </form>
      {{-- <a href="{{route('home.destroy',['codigosiva' => $codigo])}}">Eliminar curso</a>--}} 
    
    {{--   
</div>
    @endforeach
  
</div>
</x-app-layout>
--}}