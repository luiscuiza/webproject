<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Aquí va el contenido de la vista de detalles del producto -->
                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900">{{ $product->name }}</h3>
                    <p class="text-sm text-gray-600">{{ __('Precio') }}: {{ $product->price }} Bs.</p>
                    <p class="text-sm text-gray-600">{{ __('Categoría') }}: {{ $product->category->name }}</p>
                    <p class="text-sm text-gray-600">{{ __('Descripción') }}: {{ $product->description }}</p>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('product.index') }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Volver a Productos') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
