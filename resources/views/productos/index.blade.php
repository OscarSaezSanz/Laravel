@extends('layouts.app')

@section('content')
<h2 class="mb-4">Listado de Productos</h2>

@if($productos->isEmpty())
    <p>No hay productos registrados.</p>
@else
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5>{{ $producto->nombre }}</h5>
                    <p>{{ Str::limit($producto->descripcion, 80) }}</p>
                    <p><strong>Precio:</strong> €{{ $producto->precio }}</p>
                    <p><strong>Stock:</strong> {{ $producto->stock }}</p>
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary btn-sm">Ver Detalle</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endif
@endsection
