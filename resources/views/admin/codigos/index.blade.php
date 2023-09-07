@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion</h1>
@stop

@section('content')
{{--
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
         
            <a class="btn btn-info " href="{{ route('admin.codigosiva.create') }}"> Crear codigo </a>
            <label> Hay
                {{ $codigosiva->count() }}
                Codigos
            </label>
            <br>
            
            <input wire:model="search" type="form-control" placeholder="Ingrese el nombre de un codigo">
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
        </div>

    </div>
@stop
--}}
@livewire('codigos')
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
