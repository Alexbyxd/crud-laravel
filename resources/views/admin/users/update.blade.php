@extends('layouts.admin')
@section('content')
    <div>
        <h1>ACTUALIZACION DEL USUARIO</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Actualizar Datos del Usuario</h3>
                    <div class="card-tools">
                    </div>

                </div>

                <div class="card-body">
                    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de Usuario</label>
                                    <input class="form-control" type="text" name="name" value="{{ $user -> name}}" id="">
                                    @error('name')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" type="text" name="email" value="{{$user -> email}}" id="">
                                    @error('email')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input required name="password" type="password" class="form-control">
                                    @error('password')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Repetir Password</label>
                                    <input name="password_confirmation" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success float-right">Aceptar</button>
                        <a class="btn btn-secondary float-left" href="{{route('users.index')}}">Cancelar</a>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection