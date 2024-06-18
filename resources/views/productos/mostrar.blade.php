@extends('layout.plantilla')

@section('titulo', 'mostrar')

@section('contenido')


    <br>


    <div class="container size-1/2 m-auto">
        <div class="px-4 sm:px-0">
            <h1 class="text-base font-semibold leading-7 text-gray-900">"El ID del producto es: " {{ $producto->id }}</h1>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detalles del Producto</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Nombre:</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->nombre }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Precio</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->precio }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Descripcion</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->descripcion }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Categoria</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $producto->categoria }}</dd>
                </div>
                <div class="button-link"
                    style="display: flex; align-items: center; justify-content: start; gap: 10px; margin-top: 20px;">
                    <button class="button bg-purple-500 hover:bg-purple-700 text-white font-bold py-1 px-2 rounded">
                        <a href="{{ route('producto.principal') }}" class="link">Volver</a>
                    </button>
                    <button
                        class="button bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">  <a href="{{ route('producto.editar',$producto) }}" class="link">Editar</a></button>
                    <button
                        class="button bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                </div>


            </dl>


        </div>




    </div>









@endsection
