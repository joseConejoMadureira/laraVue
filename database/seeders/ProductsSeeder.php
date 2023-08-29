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
            ],
            [
                'name' => 'xbox 3',
                'price' => 2500
            ],
            [
                'name' => 'xbox 4',
                'price' => 2500
            ],
            [
                'name' => 'xbox 5',
                'price' => 2500
            ],
            [
                'name' => 'xbox 6',
                'price' => 2500
            ],
            [
                'name' => 'xbox 7',
                'price' => 2500
            ],
            [
                'name' => 'xbox 8',
                'price' => 2500
            ],
            [
                'name' => 'xbox 9',
                'price' => 2500
            ],
            [
                'name' => 'xbox 10',
                'price' => 2500
            ],
            [
                'name' => 'xbox 11',
                'price' => 2500
            ],
            [
                'name' => 'xbox 12',
                'price' => 2500
            ]
        ]);
    }
}
