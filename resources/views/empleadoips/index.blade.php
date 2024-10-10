@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif



<a href="{{url('equipo/create')}}" class="btn btn-primary"> <h3> Registrar Nuevo Equipo  </h3> </a>
<br>
<br>


<h1>   LISTADO DE EQUIPOS AGREGADOS   </h1>

<table class="table table-light">
    <thead>{{-- Cabezera de la consulta --}}
        <tr>
            <th>#</th>
            <th>NOMBRE</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>SERIE</th>
            <th>SERVICIO</th>
            <th>ACTIVO FIJO</th>
            <th>FOTO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($equipo as $equipo)
            
        <tr>
            <td>{{$equipo-> id }}</td>
            <td>{{$equipo-> nombre }}</td>
            <td>{{$equipo-> marca }}</td>
            <td>{{$equipo-> modelo}}</td>
            <td>{{$equipo-> serie }}</td>
            <td>{{$equipo-> servicio }}</td>
            <td>{{$equipo-> actFijo }}</td>
            
            
            <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$equipo->foto}}" width="100" alt=""> 
            </td>

            <td>
                <a href="{{url('/equipo/'.$equipo->id.'/edit')}}" class="btn btn-warning">
                
                Editar 
                </a>


                <form action="{{url('/equipo/'.$equipo->id)}}" class="d-inline" method="post" >
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                    
                </form>

            </td>





        </tr>
        @endforeach
    </tbody>
</table>
{{-- {!! $equipo->links() !!} --}}
</div>
@endsection