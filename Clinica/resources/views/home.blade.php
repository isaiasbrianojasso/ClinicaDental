@extends('layouts.app')
@section('content')
@if(session('status'))
<script> 
toastr.success('{{ session("status") }}','Notificacion');
</script> 
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<table class="table-responsive  table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Hora</th>
            <th>Fecha</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Tratamiento</th>
            <th>Nota</th>
            <th>Solicitado en..</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
   @foreach ($Cita as $citas)            
        <tr class="shadow-lg">
        <td scope="row">{{$citas->nombre}}</td>
           <td>{{$citas->fechaInicio}}</td>
           @if($citas->fecha==date('Y-m-d'))
            <td class="bg-warning">{{$citas->fecha}} !!</td>
           @else
           <td class="bg-success">{{$citas->fecha}}</td>
           @endif
            <td>{{$citas->telefono}}</td>
            <td>{{$citas->email}}</td>
            <td>{{$citas->tratamiento}}</td>
            <td>{{$citas->notas}}</td>
            <td>{{$citas->registro}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>    
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-1">
  <div class="card-header">
    Configuraciones
  </div>
  <div class="card-body">
    <h5 class="card-title">Notificaciones de la Pagina</h5>
    <p class="card-text">Aqui introduce tu chatid</p>
    <form class="form-group" action="{{action('CitasController@telegram',Auth::user()->id)}}">

        @csrf
        @method('POST')
   <input  type="text" size="10" maxlength="9" placeholder="123456789"  name="telegram" id="telegram"value="{{Auth::user()->telegram}}"></input>
    <button type="submit" class="btn btn-outline-success mt-2"><i class="fas fa-edit"></i> Edit</button>
     </form>
  </div>
</div>
</div>

<script>$(document).ready(function () {
    $(".se-pre-con").fadeOut("slow");
      $(".audio")[0].play();
  });</script>
@endsection
