@extends('layouts.app')

@section('content')
<div class="container">



<form action="{{url('/equipo')}}" method="post" enctype="multipart/form-data"> 
    
    @csrf
    {{--  Incluye lo que esta en formulario  --}}
    @include('equipo.form',['modo'=>'Crear']);

     
</form>

</div>
@endsection