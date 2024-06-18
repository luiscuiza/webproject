<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class='container w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-2xl'>
            <form method="POST" action="{{ route('product.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <x-label for="name" :value="__('Nombre')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name }}" required autofocus />
                </div>
                <div class="mb-4">
                    <x-label for="price" :value="__('Precio')" />
                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ $product->price }}" required />
                </div>
                <div class="mb-4">
                    <x-label for="category" :value="__('Categoría')" />
                    <select id="category" name="category_id" class="w-full px-4 py-2 border rounded-lg">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <x-label for="description" :value="__('Descripción')" />
                    <textarea id="description" class="block mt-1 w-full px-4 py-2 border rounded-lg" name="description" required>{{ $product->description }}</textarea>
                </div>
                <div class="mt-4">
                    <a href="{{ route('product.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">Volver</a>
                    <button type="submit" class="inline-block bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
