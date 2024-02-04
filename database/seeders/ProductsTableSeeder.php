<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data from the products table
        DB::table('products')->truncate();

        // Seed products table with sample data
        //id / name / description / price 
        $products = [
            [
                'id' => 1,
                'name' => 'Filter 1',
                'price' => 2100.00,
                'description' => 'Regular Oil and Filter, Light Vehicles, Gasoline',
            ],
            [
                'id' => 2,
                'name' => 'Filter 2',
                'price' => 3700.00,
                'description' => 'Fully Synthetic Oil and Filter, Light Vehicles, Gasoline',
            ],
            [
                'id' => 3,
                'name' => 'Filter 3',
                'price' => 2750.00,
                'description' => 'Regular Oil and Filter with Flushing, Light Vehicles, Gasoline',
            ],
            
            [
                'id' => 4,
                'name' => 'Filter 4',
                'price' => 4250.00,
                'description' => 'Fully Synthetic Oil and Filter with Flushing, Light Vehicles, Gasoline',
            ],
            // Add more products as needed
        ];

        DB::table('products')->insert($products);
    }
}
