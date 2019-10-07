@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Hora</th>
            <th>Fecha</th>
            <th>Telefono</th>
            <th>Nota</th>
        </tr>
    </thead>
    <tbody>
   @foreach ($Cita as $citas)            
        <tr>
        <td scope="row">{{$citas->nombre}}</td>
           <td>{{$citas->fechaInicio}}</td>
            <td>{{$citas->fecha}}</td>
            <td>{{$citas->telefono}}</td>
            <td>{{$citas->notas}}</td>
        </tr>
        @endforeach

    </tbody>
</table>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
