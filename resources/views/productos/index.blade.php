@extends('layouts.app')

@section('titulo','Nuestros Productos')

@section('contenido')
{{-- Boton para crear un producto nuevo --}}
<div class="flex justify-end m4">
<a href="{{ route('productos.create') }}" class= "btn btn outline">Nuevo Producto</a>

</div>

<div class="grid grid-cols-1 sm:grid-cold-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
@foreach($productos as $producto)
<div class="card card-compact bg-base-90 w-50 shadow-xl">
  <figure>
    <img
      src="https://picsum.photos/id/{{ $producto->id }}/200/300"
      alt="{{ $producto->nombre}}" />
  </figure>
  <div class="card-body">
    <h2 class="card-title">{{ $producto->nombre }}</h2>
    <div class="badge badge-outline">${{ $producto->precio }}</div>
    <p>{{ Str::limit($producto->descripcion,50) }}</p>
    <div class="card-actions justify-end">
      <a href="{{ route('productos.edit', $producto->id)}}" class="btn btn-outline btn-xs">Editar</a>
      <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
      </form>
    </div>
  </div>
</div>
@endforeach
</div>

@endsection