@extends('layout')

@section('title', "Procesar Permiso")

@section('content')

    <div class="container col-sm-7 tituloForm">
        <h1>Procesar Permiso</h1>
    </div>

    <div class="container col-sm-8 border formPermiso">

        <h2>Solicitud:</h2>

        <form action="" method="get">
            @csrf
                <div class="form-group text-center">

                    <label class="col-sm-4"for="dni">DNI:
                        <input type="text" class="form-control" name="dni" value="{{$permiso[0]->dni}}" disabled>
                    </label>
                    

                    <label class="col-sm-7" for="apellido">Apellido:
                        <input type="text" class="form-control" name="apellido" value="{{$permiso[0]->apellido}}" disabled>
                    </label>
                    

                    <label class="col-sm-6" for="nombre">Nombre:
                        <input type="text" class="form-control" name="nombre" value="{{$permiso[0]->nombre}}" disabled>
                    </label>
                    

                    <label class="col-sm-5" for="email">E-Mail:
                        <input type="text" class="form-control" name="email" value="{{$permiso[0]->email}}" disabled>
                    </label>
                    

                    <label class="col-sm-5" for="sector">Sector:
                        <input type="text" class="form-control" name="sector" value="{{$permiso[0]->sector}}" disabled>
                    </label>
                    
                    
                    <label class="col-sm-6" for="superior">Superior:
                        <input type="text" class="form-control" name="superior" value="{{$permiso[0]->superior}}" disabled>
                    </label>
                    

                    <label class="col-sm-11" for="dependencia">Dependencia:
                        <input type="text" class="form-control" name="dependencia" value="{{$permiso[0]->dependencia}}" disabled>
                    </label>
                    

                    <label class="col-sm-11" for="espacio">Espacio Especifico:
                        <input type="text" class="form-control" name="espacio" value="{{$permiso[0]->espacio}}" disabled>
                    </label>


                    <br>
                    <div class="text-center">
                        <a href="http://registro-de-permisos.herokuapp.com/aceptarPermiso/{{$permiso[0]->id}}" class="btn btn-secondary">Aceptar</a>
                        <a href="http://registro-de-permisos.herokuapp.com/rechazarPermiso/{{$permiso[0]->id}}" class="btn btn-secondary">Rechazar</a>
                    </div>

                </div>
        </form>   
    </div>
@endsection
