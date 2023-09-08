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
        <div class="card-header">
            <input wire:model.live="search" wire:change="search" type="form-control"
                placeholder="Ingrese el nombre de un codigo">
        </div>
        <div class="content">

            @if ($users->count())
                <div class="card-body">
                    <label> Hay
                        {{ $users->count() }}
                        Usuarios {{ $search }}
                    </label>

                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>

                    </div>
                </div>
                {{--  <div class="card-footer">
                {{$users->links()}}
            </div>
            --}}
            @else
                <div class="card-body">
                    <strong>No hay registros</strong>
                </div>
            @endif
        </div>
    </div>
</div>
