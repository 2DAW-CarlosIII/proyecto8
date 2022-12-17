@extends('layouts.master')
{{-- Display Edit --}}
@section('content')
    <article class="row">
        <header>
            <h1>Edit Blablacar Page {{ $producto->titulo }}</h1>
        </header>
        <div class="card">
            <div class="card-body" style="padding:30px">
                <form action="{{ url('/productos/edit/' . $producto->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $producto->titulo }}">
                    </div>
                    <div class="form-group">
                        <label for="fecha-viaje">Fecha Viaje</label>
                        <input type="date" name="fecha-viaje" id="fecha-viaje" class="form-control" value="{{ $producto->fecha_viaje }}">
                    </div>
                    <div class="form-group">
                        <label for="hora-viaje">Hora Viaje</label>
                        <input type="time" name="hora-viaje" id="hora-viaje" class="form-control" value="{{ $producto->hora_viaje }}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" style="width: 50%;">{{ $producto->descripcion }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="inicio-ruta">Inicio de Ruta</label>
                        <input type="text" name="inicio-ruta" id="inicio-ruta" class="form-control" value="{{ $producto->inicio_ruta }}">
                    </div>
                    <div class="form-group">
                        <label for="destino-ruta">Destino de Ruta</label>
                        <input type="text" name="destino-ruta" id="destino-ruta" class="form-control" value="{{ $producto->destino_ruta }}">
                    </div>
                    <div class="form-group">
                        <label for="Precio">Precio por persona</label>
                        <input type="number" name="precio-persona" id="precio-persona" class="form-control" style="width: 25%;" value="{{ $producto->precio_persona }}">
                    </div>
                    <div class="form-group">
                        <label for="plazas">Plazas Disponibles</label>
                        <input type="number" name="plazas" id="plazas" class="form-control" style="width: 25%;" value="{{ $producto->plazas_disponibles }}">
                    </div>
                    <div class="form-group">
                        <label for="estimacion_hora_llegada">Hora de llegada</label>
                        <input type="time" name="estimacion_hora_llegada" id="estimacion_hora_llegada" class="form-control" style="width: 25%;" value="{{ $producto->estimacion_hora_llegada }}">
                    </div>
                    <div class="form-group">
                        <label for="distancia">Distancia</label>
                        <input type="text" name="distancia" id="distancia" class="form-control" value="{{ $producto->distancia }}">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}">
                    </div>
                    <div class="form-group">
                        <label for="allow-desvios">Se Admiten Desvios (si/no)</label>
                        <input type="radio" name="allow-desvios" id="allow-desvios" checked value='true'>
                        <input type="radio" name="allow-desvios" id="allow-desvios" value='false'>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir Post</button>
                    </div>
                </form>
            </div>
        </div>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductosController@getIndex') }}">Volver al listado</a>
    </article>
@endsection
