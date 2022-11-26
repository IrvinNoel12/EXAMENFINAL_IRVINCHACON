@extends('layouts.plantilla')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <b><div class="card-header text-center">{{ __('CONSULTA DE TODOS LOS PRODUCTOS') }}</div></b>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table col-12">
                        <thread>
                            
                                <tr>
                                    
                                    <td><b>NOMBRE DE PRODUCTO</b></td>
                                    <td><b>DESCRIPCIÓN</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($tiendas as $tienda)
                            
                            <tr>
                                <td>{{$tienda->nombre}}</td>
                                <td>{{$tienda->descripcion}}</td>
                                <td>
                                <a href="{{route('eliminarproducto',$tienda->id)}}" class="btn btn-danger">Borrar</a>
                                </td>
                                <td>
                                <a href="{{route('muestraproducto',$tienda->id)}}" class="btn btn-warning">Editar</a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection