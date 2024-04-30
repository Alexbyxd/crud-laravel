@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Listado de Usuarios</h1>
    </div>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Lista de Usuarios</h3>
                <div class="card-tools">
                    <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="bi bi-person-fill-add"></i>Nuevo
                        Usuario</a>
                </div>

            </div>

            <div class="card-body">
                <table class="table table-sm table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        //contador para las lista
                            $counter = 0 ;
                        @endphp
                        @foreach ($users as $user)
                        @php
                            $counter++;
                            $id = $user -> id;
                        @endphp
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('users.show', $user->id)}}" type="button" class="btn btn-info">Show</a>
                                        <a href="{{route('users.edit', $user->id)}}" type="button" class="btn btn-success">Edit</a>
                                        <form action="{{route('users.destroy', $user->id)}}" onclick="ask{{$id}}(event)" id="miFormulario{{$id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="sumbit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <script>
                                            function ask{{$id}}(event){
                                                event.preventDefault();
                                                Swal.fire({
                                                    title: 'Eliminar registro',
                                                    text: '¿Desea eliminar este registro?',
                                                    icon: 'question',
                                                    showDenyButton: true,
                                                    confirmButtonText: 'Eliminar',
                                                    confirmButtonColor: '#A5161D',
                                                    denyButtonColor: '#270A0A',
                                                    denyButtonText: 'Cancelar',
                                                }).then((result) => {
                                                    if (result.isConfirmed){
                                                        var form = $('#miFormulario{{$id}}');
                                                        form.submit();
                                                    }
                                                })
                                            }
                                        </script>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>
    <div>
        <ul>

        </ul>
    </div>
@endsection
