<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Product 1', 'description' => 'Description for Product 1', 'price' => 81.99, 'weight' => 6.97, 'country_of_origin' => 'India'],
            ['name' => 'Product 2', 'description' => 'Description for Product 2', 'price' => 49.49, 'weight' => 6.76, 'country_of_origin' => 'France'],
            ['name' => 'Product 3', 'description' => 'Description for Product 3', 'price' => 50.94, 'weight' => null, 'country_of_origin' => 'Japan'],
            ['name' => 'Product 4', 'description' => 'Description for Product 4', 'price' => 21.60, 'weight' => 5.11, 'country_of_origin' => 'Brazil'],
            ['name' => 'Product 5', 'description' => 'Description for Product 5', 'price' => 99.88, 'weight' => 8.80, 'country_of_origin' => 'USA'],
            ['name' => 'Product 6', 'description' => 'Description for Product 6', 'price' => 59.86, 'weight' => null, 'country_of_origin' => 'China'],
            ['name' => 'Product 7', 'description' => 'Description for Product 7', 'price' => 59.48, 'weight' => null, 'country_of_origin' => 'USA'],
            ['name' => 'Product 8', 'description' => 'Description for Product 8', 'price' => 42.76, 'weight' => 6.96, 'country_of_origin' => 'Germany'],
            ['name' => 'Product 9', 'description' => 'Description for Product 9', 'price' => 77.60, 'weight' => 4.13, 'country_of_origin' => 'Japan'],
            ['name' => 'Product 10', 'description' => 'Description for Product 10', 'price' => 61.55, 'weight' => null, 'country_of_origin' => 'Germany'],
            ['name' => 'Product 11', 'description' => 'Description for Product 11', 'price' => 77.35, 'weight' => 7.70, 'country_of_origin' => 'China'],
            ['name' => 'Product 12', 'description' => 'Description for Product 12', 'price' => 17.16, 'weight' => 2.38, 'country_of_origin' => 'India'],
            ['name' => 'Product 13', 'description' => 'Description for Product 13', 'price' => 31.20, 'weight' => 4.17, 'country_of_origin' => 'France'],
            ['name' => 'Product 14', 'description' => 'Description for Product 14', 'price' => 66.99, 'weight' => null, 'country_of_origin' => 'USA'],
            ['name' => 'Product 15', 'description' => 'Description for Product 15', 'price' => 85.76, 'weight' => null, 'country_of_origin' => 'Italy'],
            ['name' => 'Product 16', 'description' => 'Description for Product 16', 'price' => 98.07, 'weight' => null, 'country_of_origin' => 'India'],
            ['name' => 'Product 17', 'description' => 'Description for Product 17', 'price' => 38.53, 'weight' => 7.50, 'country_of_origin' => 'France'],
            ['name' => 'Product 18', 'description' => 'Description for Product 18', 'price' => 58.37, 'weight' => null, 'country_of_origin' => 'France'],
            ['name' => 'Product 19', 'description' => 'Description for Product 19', 'price' => 10.0, 'weight' => null, 'country_of_origin' => 'China'],
            ['name' => 'Product 20', 'description' => 'Description for Product 20', 'price' => 45.56, 'weight' => null, 'country_of_origin' => null],
            ['name' => 'Product 21', 'description' => 'Description for Product 21', 'price' => 39.90, 'weight' => null, 'country_of_origin' => 'China'],
            ['name' => 'Product 22', 'description' => 'Description for Product 22', 'price' => 87.11, 'weight' => null, 'country_of_origin' => 'China'],
            ['name' => 'Product 23', 'description' => 'Description for Product 23', 'price' => 77.68, 'weight' => 6.93, 'country_of_origin' => 'Brazil'],
        ];

        foreach ($products as $product) {
            Product::firstOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
