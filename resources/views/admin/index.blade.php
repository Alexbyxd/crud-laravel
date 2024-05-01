@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Principal</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    @php
                        $count = 0;
                        foreach ($users as $user) {
                            $count++;
                        }
                    @endphp
                    <h3>{{$count}}</h3>
                    <p>USUARIOS REGISTRADOS</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('users.index')}}" class="small-box-footer">MAS INFORMACION<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
