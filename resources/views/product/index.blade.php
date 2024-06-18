<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accion</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $product->price }} Bs.</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('product.show', $product) }}" class="text-indigo-600 hover:text-indigo-900"><i class="fa fa-eye"></i></a>&nbsp;
                                    <a href="{{ route('product.edit', $product) }}" class="text-indigo-600 hover:text-indigo-900"><i class="fa fa-edit"></i></a>&nbsp;
                                    <a class="text-red-600 hover:text-red-700" style="cursor: pointer;" onclick="confirmDelete(event, {{ $product->id }})"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $products->links() }}
    </div>
    <form id="delete-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function confirmDelete(event, productId) {
            event.preventDefault();
            if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
                let form = document.getElementById('delete-form');
                form.action = `/product/destroy/${productId}`;
                form.submit();
            }
        }
    </script>
</x-app-layout>
