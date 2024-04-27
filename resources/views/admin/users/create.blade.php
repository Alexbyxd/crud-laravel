@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Nuevo Usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registro de Usuario</h3>
                    <div class="card-tools">
                    </div>

                </div>

                <div class="card-body">
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de Usuario</label>
                                    <input required value="{{old('name')}}" name="name" type="text" class="form-control">
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
                                    <input required name="email" type="email" class="form-control" value="{{old('email')}}">
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
                        <a class="btn btn-secondary float-left" href="{{route('users.index')}}">Cancelar</a>
                        <button class="btn btn-primary float-right" type="submit"><i class="bi bi-save"></i>Guardar Registro</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
