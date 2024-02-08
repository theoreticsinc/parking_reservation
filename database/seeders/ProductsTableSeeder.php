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
                'name' => 'Change Oil 1',
                'price' => 2100.00,
                'description' => 'Regular Oil and Filter, Light Vehicles, Gasoline',
            ],
            [
                'id' => 2,
                'name' => 'Change Oil 2',
                'price' => 3700.00,
                'description' => 'Fully Synthetic Oil and Filter, Light Vehicles, Gasoline',
            ],
            [
                'id' => 3,
                'name' => 'Change Oil 3',
                'price' => 2650.00,
                'description' => 'Regular Oil and Filter with Flushing, Light Vehicles, Gasoline',
            ],            
            [
                'id' => 4,
                'name' => 'Change Oil 4',
                'price' => 4250.00,
                'description' => 'Fully Synthetic Oil and Filter with Flushing, Light Vehicles, Gasoline',
            ],           
            [
                'id' => 5,
                'name' => 'Change Oil 5',
                'price' => 2800.00,
                'description' => 'Regular Oil and Filter, Medium Vehicles, Gasoline',
            ],           
            [
                'id' => 6,
                'name' => 'Change Oil 6',
                'price' => 5200.00,
                'description' => 'Fully Synthetic Oil and Filter, Medium Vehicles, Gasoline',
            ],          
            [
                'id' => 7,
                'name' => 'Change Oil 7',
                'price' => 3595.00,
                'description' => 'Regular Oil and Filter with Flushing, Medium Vehicles, Gasoline',
            ],           
            [
                'id' => 8,
                'name' => 'Change Oil 8',
                'price' => 5995.00,
                'description' => 'Fully Synthetic Oil and Filter with Flushing, Medium Vehicles, Gasoline',
            ],       
            [
                'id' => 9,
                'name' => 'Change Oil 9',
                'price' => 3100.00,
                'description' => 'Regular Oil and Filter(7Liters), Medium Vehicles, Diesel',
            ],       
            [
                'id' => 10,
                'name' => 'Change Oil 10',
                'price' => 3400.00,
                'description' => 'Regular Oil and Filter(8Liters), Medium Vehicles, Diesel',
            ],      
            [
                'id' => 11,
                'name' => 'Change Oil 11',
                'price' => 3700.00,
                'description' => 'Regular Oil and Filter(9Liters), Medium Vehicles, Diesel',
            ],        
            [
                'id' => 12,
                'name' => 'Change Oil 12',
                'price' => 5900.00,
                'description' => 'Fully Synthetic Oil and Filter(7Liters), Medium Vehicles, Diesel',
            ],        
            [
                'id' => 13,
                'name' => 'Change Oil 13',
                'price' => 6600.00,
                'description' => 'Fully Synthetic Oil and Filter(8Liters), Medium Vehicles, Diesel',
            ],        
            [
                'id' => 14,
                'name' => 'Change Oil 14',
                'price' => 7300.00,
                'description' => 'Fully Synthetic Oil and Filter(9Liters), Medium Vehicles, Diesel',
            ],        
            [
                'id' => 15,
                'name' => 'Change Oil 15',
                'price' => 4160.00,
                'description' => 'Regular Oil and Filter(7Liters) with Flushing, Medium Vehicles, Diesel',
            ],       
            [
                'id' => 16,
                'name' => 'Change Oil 16',
                'price' => 4460.00,
                'description' => 'Regular Oil and Filter(8Liters) with Flushing, Medium Vehicles, Diesel',
            ],      
            [
                'id' => 17,
                'name' => 'Change Oil 17',
                'price' => 4760.00,
                'description' => 'Regular Oil and Filter(9Liters) with Flushing, Medium Vehicles, Diesel',
            ],        
            [
                'id' => 18,
                'name' => 'Change Oil 19',
                'price' => 6960.00,
                'description' => 'Fully Synthetic Oil and Filter(7Liters) with Flushing, Medium Vehicles, Diesel',
            ],        
            [
                'id' => 20,
                'name' => 'Change Oil 20',
                'price' => 7660.00,
                'description' => 'Fully Synthetic Oil and Filter(8Liters) with Flushing, Medium Vehicles, Diesel',
            ],        
            [
                'id' => 21,
                'name' => 'Change Oil 21',
                'price' => 8360.00,
                'description' => 'Fully Synthetic Oil and Filter(9Liters) with Flushing, Medium Vehicles, Diesel',
            ],         
            [
                'id' => 22,
                'name' => 'Change Oil 22',
                'price' => 3550.00,
                'description' => 'Regular Oil and Filter(8Liters), Large Vehicles, Diesel',
            ],      
            [
                'id' => 23,
                'name' => 'Change Oil 23',
                'price' => 4100.00,
                'description' => 'Regular Oil and Filter(9Liters), Large Vehicles, Diesel',
            ],         
            [
                'id' => 24,
                'name' => 'Change Oil 24',
                'price' => 7660.00,
                'description' => 'Fully Synthetic Oil and Filter(8Liters), Large Vehicles, Diesel',
            ],        
            [
                'id' => 25,
                'name' => 'Change Oil 25',
                'price' => 8360.00,
                'description' => 'Fully Synthetic Oil and Filter(9Liters), Large Vehicles, Diesel',
            ],          
            [
                'id' => 26,
                'name' => 'Change Oil 26',
                'price' => 4650.00,
                'description' => 'Regular Oil and Filter(8Liters) with Flushing, Large Vehicles, Diesel',
            ],      
            [
                'id' => 27,
                'name' => 'Change Oil 27',
                'price' => 5160.00,
                'description' => 'Regular Oil and Filter(9Liters) with Flushing, Large Vehicles, Diesel',
            ],         
            [
                'id' => 28,
                'name' => 'Change Oil 28',
                'price' => 7760.00,
                'description' => 'Fully Synthetic Oil and Filter(8Liters) with Flushing, Large Vehicles, Diesel',
            ],        
            [
                'id' => 29,
                'name' => 'Change Oil 29',
                'price' => 8760.00,
                'description' => 'Fully Synthetic Oil and Filter(9Liters) with Flushing, Large Vehicles, Diesel',
            ],     
            [
                'id' => 30,
                'name' => 'Change Oil 30',
                'price' => 4200.00,
                'description' => 'Regular Oil and Filter(9Liters), Large Vehicles, Gasoline',
            ],     
            [
                'id' => 31,
                'name' => 'Change Oil 31',
                'price' => 7500.00,
                'description' => 'Fully Synthetic Oil and Filter(9Liters), Large Vehicles, Gasoline',
            ],      
            [
                'id' => 32,
                'name' => 'Change Oil 32',
                'price' => 5260.00,
                'description' => 'Regular Oil and Filter(9Liters) with Flushing, Large Vehicles, Gasoline',
            ],     
            [
                'id' => 33,
                'name' => 'Change Oil 33',
                'price' => 8350.00,
                'description' => 'Fully Synthetic Oil and Filter(9Liters) with Flushing, Large Vehicles, Gasoline',
            ],    
            // Add more products as needed
        ];

        DB::table('products')->insert($products);
    }
}
