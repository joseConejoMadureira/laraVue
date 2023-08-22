<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::insert([
            [
                'name' => 'xbox 1',
                'price' => 2500
            ],
            [
                'name' => 'xbox 2',
                'price' => 2500
            ]
        ]);
    }
}
