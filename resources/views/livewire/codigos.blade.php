<div>
    <style>
        .content {
            display: flex;
            justify-content: space-around;
            margin: auto;
        }

        #button {
            background-color: rgba(82, 73, 73, 0.466);
            border-radius: 5px;
            color: rgb(37, 36, 33);
            padding: 4px;

        }
    </style>

    <div class="container">

        <div class="content">
            {{-- Buscar codigos: {{$search}} --}}
            <a class="btn btn-info " href="{{ route('admin.codigosiva.create') }}"> Crear codigo </a>
            <label> Hay
                {{ $codigosiva->count() }}
                Codigos {{ $search }}
            </label>
            <br>
            <input wire:model.live="search" type="form-control" placeholder="Ingrese el nombre de un codigo">

        </div>


        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($codigosiva as $codigo)
                        <tr>
                            <td>{{ $codigo->id }}</td>
                            <td>{{ $codigo->nombre }}</td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.codigosiva.edit', $codigo) }}">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="{{ route('admin.codigosiva.destroy', $codigo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{--   @foreach ($codigosiva as $codigo)
            <li>
                <a href="{{route('admin.codigosiva.show', $codigo) }}">{{ $codigo->nombre }}</a>
                <a href="{{route('admin.codigosiva.edit', $codigo)}}">Editar codigo</a>
            </li>
        @endforeach
        --}}
        </div>

    </div>


</div>
