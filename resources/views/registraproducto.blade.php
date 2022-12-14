@extends('layouts.plantilla')

@section('content')
<br>



<div class="container title">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center">TIENDA MISCELANEA</h1>
            <div class="card">
             
                <div class="card-header text-center title">{{ __('REGISTRO DE PRODUCTO') }}</div>

                <div class="card-body background">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO PRODUCTO') }}
                    {{ session('status') }}

                    <form class="form" action="{{route('guardarproducto')}}" method="POST">
                        @csrf
                        <label class="title">
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label class="title">
                            Descripcion: <br>
                            <input name="descripcion" type="text">
                        </label>
            
                        <button class="btn btn-primary boton" type="submit">Guardar</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection