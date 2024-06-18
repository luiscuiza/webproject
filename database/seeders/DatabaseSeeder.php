<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categoriesData = [
            ['name' => 'Gaseosas'],
            ['name' => 'Lácteos'],
            ['name' => 'Accesorios'],
            ['name' => 'Electrónica'],
            ['name' => 'Ropa'],
        ];

        $categorias = collect();
        foreach ($categoriesData as $data) {
            $categorias->push(Category::create($data));
        }

        $products = [
            ['name' => 'Coca Cola', 'price' => 15.00, 'description' => 'Sabor original', 'category_id' => $categorias->where('name', 'Gaseosas')->first()->id],
            ['name' => 'Pepsi', 'price' => 12.00, 'description' => 'Sabor refrescante', 'category_id' => $categorias->where('name', 'Gaseosas')->first()->id],
            ['name' => 'Fanta', 'price' => 12.00, 'description' => 'Sabor a naranja', 'category_id' => $categorias->where('name', 'Gaseosas')->first()->id],
            ['name' => 'Sprite', 'price' => 12.00, 'description' => 'Sabor a limón', 'category_id' => $categorias->where('name', 'Gaseosas')->first()->id],
            ['name' => '7up', 'price' => 12.00, 'description' => 'Sabor refrescante', 'category_id' => $categorias->where('name', 'Gaseosas')->first()->id],
            ['name' => 'Inca Kola', 'price' => 10.00, 'description' => 'Sabor original', 'category_id' => $categorias->where('name', 'Gaseosas')->first()->id],

            ['name' => 'Leche Entera', 'price' => 20.00, 'description' => 'Leche fresca', 'category_id' => $categorias->where('name', 'Lácteos')->first()->id],
            ['name' => 'Yogur', 'price' => 15.00, 'description' => 'Con frutas', 'category_id' => $categorias->where('name', 'Lácteos')->first()->id],
            ['name' => 'Queso', 'price' => 30.00, 'description' => 'Queso cheddar', 'category_id' => $categorias->where('name', 'Lácteos')->first()->id],
            ['name' => 'Mantequilla', 'price' => 25.00, 'description' => 'Mantequilla fresca', 'category_id' => $categorias->where('name', 'Lácteos')->first()->id],
            ['name' => 'Leche Descremada', 'price' => 18.00, 'description' => 'Leche baja en grasa', 'category_id' => $categorias->where('name', 'Lácteos')->first()->id],
            ['name' => 'Yogur Griego', 'price' => 20.00, 'description' => 'Yogur natural', 'category_id' => $categorias->where('name', 'Lácteos')->first()->id],

            ['name' => 'Reloj', 'price' => 150.00, 'description' => 'Reloj elegante', 'category_id' => $categorias->where('name', 'Accesorios')->first()->id],
            ['name' => 'Gafas de sol', 'price' => 25.00, 'description' => 'Protección UV', 'category_id' => $categorias->where('name', 'Accesorios')->first()->id],
            ['name' => 'Bolso', 'price' => 70.00, 'description' => 'Bolso de cuero', 'category_id' => $categorias->where('name', 'Accesorios')->first()->id],
            ['name' => 'Cinturón', 'price' => 20.00, 'description' => 'Cinturón de cuero', 'category_id' => $categorias->where('name', 'Accesorios')->first()->id],
            ['name' => 'Sombrero', 'price' => 40.00, 'description' => 'Sombrero de paja', 'category_id' => $categorias->where('name', 'Accesorios')->first()->id],
            ['name' => 'Bufanda', 'price' => 35.00, 'description' => 'Bufanda de lana', 'category_id' => $categorias->where('name', 'Accesorios')->first()->id],

            ['name' => 'Teléfono', 'price' => 2000.00, 'description' => 'Smartphone', 'category_id' => $categorias->where('name', 'Electrónica')->first()->id],
            ['name' => 'Laptop', 'price' => 4000.00, 'description' => 'Portátil', 'category_id' => $categorias->where('name', 'Electrónica')->first()->id],
            ['name' => 'Tablet', 'price' => 2000.00, 'description' => 'Pantalla táctil', 'category_id' => $categorias->where('name', 'Electrónica')->first()->id],
            ['name' => 'Auriculares', 'price' => 50.00, 'description' => 'Auriculares con cancelación de ruido', 'category_id' => $categorias->where('name', 'Electrónica')->first()->id],
            ['name' => 'Teclado', 'price' => 150.00, 'description' => 'Teclado mecánico', 'category_id' => $categorias->where('name', 'Electrónica')->first()->id],
            ['name' => 'Ratón', 'price' => 50.00, 'description' => 'Ratón inalámbrico', 'category_id' => $categorias->where('name', 'Electrónica')->first()->id],

            ['name' => 'Camiseta', 'price' => 50.00, 'description' => '100% algodón', 'category_id' => $categorias->where('name', 'Ropa')->first()->id],
            ['name' => 'Jeans', 'price' => 200.00, 'description' => 'Denim azul', 'category_id' => $categorias->where('name', 'Ropa')->first()->id],
            ['name' => 'Chaqueta', 'price' => 80.00, 'description' => 'Chaqueta de cuero', 'category_id' => $categorias->where('name', 'Ropa')->first()->id],
            ['name' => 'Camisa', 'price' => 100.00, 'description' => 'Camisa formal', 'category_id' => $categorias->where('name', 'Ropa')->first()->id],
            ['name' => 'Pantalones', 'price' => 200.00, 'description' => 'Pantalones de vestir', 'category_id' => $categorias->where('name', 'Ropa')->first()->id],
            ['name' => 'Zapatos', 'price' => 300.00, 'description' => 'Zapatos de cuero', 'category_id' => $categorias->where('name', 'Ropa')->first()->id],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
