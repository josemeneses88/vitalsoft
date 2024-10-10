

    <h1>{{$modo}} Equipo</h1>

    @if(count($errors) > 0)

    
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
        </ul>
    </div>
    @endif

    <div class="form-group">
    <label for="Nombre"> NOMBRE </label>
    <input type="text" class="form-control" name="nombre" value="{{isset($equipo->nombre)?$equipo->nombre:old('') }}" id="Nombre">
    </div>

    <div class="form-group">
    <label for="Marca"> MARCA </label>
    <input type="text" class="form-control" name="marca" value="{{isset($equipo->marca)?$equipo->marca:old('marca') }}" id="Marca"> 
    </div>

    <div class="form-group">
    <label for="Modelo"> MODELO </label>  
    <input type="text" class="form-control" name="modelo"  value="{{isset($equipo->modelo)?$equipo->modelo:old('modelo') }}" id="Modelo">
    </div>

    <div class="form-group">
    <label for=" Serie">  SERIE </label>  
    <input type="text" class="form-control" name="serie"  value="{{isset($equipo->serie)?$equipo->serie:old('serie') }}" id="Serie">
    </div>


    <div class="form-group">
    <label for="servicio"> SERVICIO </label>
    <input type="text" class="form-control" name="servicio" value="{{isset($equipo->servicio)?$equipo->servicio:old('servicio') }}"  id="servicio">
    </div>


    <div class="form-group">
    <label for=" actFijo">  ACTIVO FIJO </label>  
    <input type="text" class="form-control"  name="actFijo" value="{{isset($equipo->actFijo)?$equipo->actFijo:old('actFijo') }}" id="actFijo">
    </div>

    <div class="form-group">
    <label for="foto"  > </label>  
    {{-- {{$equipo->foto}}     Muestra ruta de la imagen  --}}

    @if (isset($equipo->foto))
    <img class="img-thumbnail img-fluid"  src="{{ asset('storage').'/'.$equipo->foto}}" width="100" alt=""> 
    @endif

    <input type="file"name="foto" value="" id="foto" class="form-control">
    </div>


    <input type="submit" value="{{ $modo }} datos" class="btn btn-success">
    <a href="{{url('equipo')}}" class="btn btn-dark"> Regresar  </a>