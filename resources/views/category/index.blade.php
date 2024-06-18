@extends('layout.plantilla')

@section('titulo', 'Categorias')

@section('contenido')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuItem = document.getElementById("menu-categoria");
            menuItem.classList.add('bg-gray-900', 'text-white');
            menuItem.classList.remove('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
        });
    </script>

    <h2 class="text-3xl font-semibold text-gray-700 mb-2">Lista de Categorias</h2>

{{--
    <div class="text-right">
        <a href="{{ route('categoria.crear') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Categoria</a>
    </div>
--}}

    <br>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                @foreach ($categorias as $cat)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm">{{ $cat->nombre }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $categorias->links() }}
    </div>

@endsection
