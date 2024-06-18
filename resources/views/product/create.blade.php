<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class='container w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-2xl'>
            <form method="POST" action="{{ route('product.store') }}">
                @csrf
                <div class="mb-4">
                    <x-label for="name" :value="__('Nombre')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                </div>
                <div class="mb-4">
                    <x-label for="price" :value="__('Precio')" />
                    <x-input id="price" class="block mt-1 w-full" type="number" name="price" required />
                </div>
                <div class="mb-4">
                    <x-label for="category" :value="__('Categoría')" />
                    <select id="category" name="category_id" class="w-full px-4 py-2 border rounded-lg">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <x-label for="description" :value="__('Descripción')" />
                    <textarea id="description" class="block mt-1 w-full px-4 py-2 border rounded-lg" name="description" required></textarea>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Crear') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
