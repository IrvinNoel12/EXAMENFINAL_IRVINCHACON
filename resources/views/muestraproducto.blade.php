@extends('layouts.plantilla')

@section('content')
<br>

<style>
 

</style>

<div class="container title">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center title">{{ __('EDITAR PRODUCTO') }}</div>

                <div class="card-body background">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('INGRESE NUEVOS DATOS') }}
                    {{ session('status') }}

                    <form class="form" action="{{route('editarproducto',$tiendas->id)}}" method="POST">
                        @csrf
                        <label class="title">
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$tiendas->nombre}}">
                        </label>
                        <label class="title">
                            Descripción: <br>
                            <input name="descripcion" type="text" value="{{$tiendas->descripcion}}">
                        </label>
            
                        <button class="boton" type="submit">Guardar cambios</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection