@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center ">
    <div class="bg-white shadow-md rounded  pt-6 pb-8 mb-4">
        <div class="px-8 flex flex-row justify-end">
            <a href="{{ route('productos.create') }}" class="bg-blue-900 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded">
                Agregar
            </a>
        </div>
        <div class="flex flex-row mt-4 px-8">
            <form action="{{ route('productos.search') }}" method="GET" class="flex">
                <div class="mr-4">
                    <label for="name" class="block font-medium text-gray-700">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-input mt-1 rounded-md shadow-sm w-full border focus:outline-blue-900" value="{{ old('name') }}">
                </div>
                <div class="mr-4">
                    <label for="price_min" class="block font-medium text-gray-700">Precio mínimo:</label>
                    <input type="number" name="price_min" id="price_min" class="form-input mt-1 rounded-md shadow-sm w-full border focus:outline-blue-900" value="{{ old('price_min') }}">
                </div>
                <div class="mr-4">
                    <label for="price_max" class="block font-medium text-gray-700">Precio máximo:</label>
                    <input type="number" name="price_max" id="price_max" class="form-input mt-1 rounded-md shadow-sm w-full border focus:outline-blue-900" value="{{ old('price_max') }}">
                </div>
                <button type="submit" class="bg-blue-900 hover:bg-pink-500 text-white font-bold px-4 rounded h-10 mt-5">
                    <i class="fas fa-search "></i>
                </button>
            </form>
        </div>

        <table class="min-w-full divide-y divide-gray-200 mt-5">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Precio
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($productos as $producto)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $producto->name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $producto->description }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">${{ $producto->price }}</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@endsection