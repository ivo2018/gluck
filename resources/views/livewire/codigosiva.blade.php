



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
    <div>
    <a id="button" href="{{route('admin.codigosiva.create')}}"> Crear codigo </a>
    <br>
    <label >
        Buscar codigos: {{$search}}

        <div class="card-header">
            <input wire:model="search" type="form-control" placeholder="Ingrese el nombre de un post">
         </div>
 
    </label>
    <label > Hay
    {{$codigosiva->count()}}
    Codigos
</label>
    @foreach ($codigosiva as $codigo)
    <li>

        <a href="{{ route('admin.codigosiva.show', $codigo) }}">{{ $codigo->nombre }}</a>

    </li>
@endforeach
</div>
</div>



