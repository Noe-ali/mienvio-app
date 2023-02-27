@extends('layouts.app')
@section('content')
<div class="flex justify-center items-center ">


    <div class="flex flex-row mt-4">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[500px]">
            <div class="flex flex-row justify-end">
                <a href="{{ route('productos.index') }}" class="border bg-blue-900 text-white px-4 py-2 rounded"><i class="fa-solid fa-xmark"></i></a>
            </div>

            <h1 class="text-2xl font-bold mb-4 text-center">Agregar producto</h1>
            <form method="post" action="{{ route('productos.store') }}" class="flex flex-col space-y-4">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="font-medium text-gray-700">Nombre</label>
                    <input type="text" class="form-input mt-1 rounded-md shadow-sm  focus:outline-blue-900 border" name="name" id="nombre" required>
                </div>
                <div class="flex flex-col">
                    <label for="description" class="font-medium text-gray-700">Descripción</label>
                    <textarea class="form-textarea mt-1 rounded-md shadow-sm  focus:outline-blue-900 border" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="flex flex-col">
                    <label for="price" class="font-medium text-gray-700">Precio</label>
                    <input type="number" step="0.01" class="form-input mt-1 rounded-md shadow-sm  focus:outline-blue-900 border" name="price" id="precio" required>
                </div>

                <button type="submit" class="bg-blue-900 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded inline-block">
                    <i class="fas fa-save mr-2"></i>Guardar
                </button>
        </div>
    </div>
</div>
@endsection