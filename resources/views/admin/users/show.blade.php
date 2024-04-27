    @extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Informacion del Usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos del Usuario</h3>
                    <div class="card-tools">
                    </div>

                </div>

                <div class="card-body">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de Usuario</label>
                                    <p class="form-group">{{$user->name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <p class="form-group">{{$user->email}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a class="btn btn-secondary float-left" href="{{route('users.index')}}">Cancelar</a>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
