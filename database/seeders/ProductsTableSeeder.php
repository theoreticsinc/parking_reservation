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
                'price' => 4450.00,
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
                'description' => 'Fully Synthetic Oil and Filter(9Liters) with Flushing , Large Vehicles, Diesel',
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
            
            


            // Cleaning Light Vehicle
            [
                'id' => 34,
                'name' => 'Cleaning',
                'price' => 280.00,
                'description' => 'Car Wash, Light Vehicles, Gasoline',
            ],
            [
                'id' => 35,
                'name' => 'Cleaning',
                'price' => 210.00,
                'description' => 'Vacuum, Light Vehicles, Gasoline',
            ],
            [
                'id' => 36,
                'name' => 'Cleaning',
                'price' => 420.00,
                'description' => 'Engine Wash, Light Vehicles, Gasoline',
            ],
            [
                'id' => 37,
                'name' => 'Cleaning',
                'price' => 350.00,
                'description' => 'Under Chassis Wash, Light Vehicles, Gasoline',
            ],
            [
                'id' => 38,
                'name' => 'Cleaning',
                'price' => 970.00,
                'description' => 'Promo Package (Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Light Vehicles, Gasoline',
            ],
            [
                'id' => 39,
                'name' => 'Cleaning',
                'price' => 1150.00,
                'description' => 'Engine Detailing, Light Vehicles, Gasoline',
            ],
            [
                'id' => 40,
                'name' => 'Cleaning',
                'price' => 5150.00,
                'description' => 'Exterior Detailing, Light Vehicles, Gasoline',
            ],
            [
                'id' => 41,
                'name' => 'Cleaning',
                'price' => 3050.00,
                'description' => 'Interior Detailing, Light Vehicles, Gasoline',
            ],
            [
                'id' => 42,
                'name' => 'Cleaning',
                'price' => 8150.00,
                'description' => 'Complete Auto Detailing (Engine,Exterior,Interior,Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Light Vehicles, Gasoline',
            ],
            [
                'id' => 43,
                'name' => 'Cleaning',
                'price' => 1180.00,
                'description' => 'Waxing(Microtex), Light Vehicles, Gasoline',
            ],


            //Maintenance Light Vehicle

            [
                'id' => 44,
                'name' => 'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Electronic 4-Wheel Alignment, Light Vehicles, Gasoline',
            ],
            [
                'id' => 45,
                'name' => 'Maintenance & Repair',
                'price' => 325.00,
                'description' => 'Electronic Wheel Balancing/Tire
                (Add-on Flat weights,Wheel Weights,Bostik), Light Vehicles, Gasoline',
            ],
            [
                'id' => 46,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Tire Mounting/Tire, Light Vehicles, Gasoline',
            ],
            [
                'id' => 47,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Vulcanizing/Tire (Plus Patches & Chemicure), Light Vehicles, Gasoline',
            ],
            [
                'id' => 48,
                'name' => 'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Open/Clean & Adjust All Breaks, Light Vehicles, Gasoline',
            ],
            [
                'id' => 49,
                'name' => 'Maintenance & Repair',
                'price' => 800.00,
                'description' => 'Check-up Charge (Under Chassis,Engine,Aircon,Electrical), Light Vehicles, Gasoline',
            ],




            
            // Cleaning Medium Vehicle Gasoline
            [
                'id' => 50,
                'name' => 'Cleaning',
                'price' => 350.00,
                'description' => 'Car Wash, Medium Vehicle, Gasoline',
            ],
            [
                'id' => 51,
                'name' => 'Cleaning',
                'price' => 280.00,
                'description' => 'Vacuum, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 52,
                'name' => 'Cleaning',
                'price' => 490.00,
                'description' => 'Engine Wash, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 53,
                'name' => 'Cleaning',
                'price' => 420.00,
                'description' => 'Under Chassis Wash, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 54,
                'name' => 'Cleaning',
                'price' => 1150.00,
                'description' => 'Promo Package (Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Medium Vehicles, Gasoline',
            ],
            [
                'id' => 55,
                'name' => 'Cleaning',
                'price' => 1800.00,
                'description' => 'Engine Detailing, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 56,
                'name' => 'Cleaning',
                'price' => 5950.00,
                'description' => 'Exterior Detailing, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 57,
                'name' => 'Cleaning',
                'price' => 3590.00,
                'description' => 'Interior Detailing, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 58,
                'name' => 'Cleaning',
                'price' => 9550.00,
                'description' => 'Complete Auto Detailing (Engine,Exterior,Interior,Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Medium Vehicles, Gasoline',
            ],
            [
                'id' => 59,
                'name' => 'Cleaning',
                'price' => 1350.00,
                'description' => 'Waxing(Microtex), Medium Vehicles, Gasoline',
            ],


            //Maintenance Medium Vehicle Gasoline
            [
                'id' => 60,
                'name' =>'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Electronic 4-Wheel Alignment, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 62,
                'name' => 'Maintenance & Repair',
                'price' => 325.00,
                'description' => 'Electronic Wheel Balancing/Tire
                (Add-on Flat weights,Wheel Weights,Bostik), Medium Vehicles, Gasoline',
            ],
            [
                'id' => 63,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Tire Mounting/Tire, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 64,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Vulcanizing/Tire (Plus Patches & Chemicure), Medium Vehicles, Gasoline',
            ],
            [
                'id' => 65,
                'name' => 'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Open/Clean & Adjust All Breaks, Medium Vehicles, Gasoline',
            ],
            [
                'id' => 66,
                'name' => 'Maintenance & Repair',
                'price' => 800.00,
                'description' => 'Check-up Charge (Under Chassis,Engine,Aircon,Electrical), Medium Vehicles, Gasoline',
            ],





             
            // Cleaning Medium Vehicle Diesel
            [
                'id' => 67,
                'name' => 'Cleaning',
                'price' => 350.00,
                'description' => 'Car Wash, Medium Vehicle, Diesel',
            ],
            [
                'id' => 68,
                'name' => 'Cleaning',
                'price' => 280.00,
                'description' => 'Vacuum, Medium Vehicles, Diesel',
            ],
            [
                'id' => 69,
                'name' => 'Cleaning',
                'price' => 490.00,
                'description' => 'Engine Wash, Medium Vehicles, Diesel',
            ],
            [
                'id' => 70,
                'name' => 'Cleaning',
                'price' => 420.00,
                'description' => 'Under Chassis Wash, Medium Vehicles, Diesel',
            ],
            [
                'id' => 71,
                'name' => 'Cleaning',
                'price' => 1150.00,
                'description' => 'Promo Package (Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Medium Vehicles, Diesel',
            ],
            [
                'id' => 72,
                'name' => 'Cleaning',
                'price' => 1800.00,
                'description' => 'Engine Detailing, Medium Vehicles, Diesel',
            ],
            [
                'id' => 73,
                'name' => 'Cleaning',
                'price' => 5950.00,
                'description' => 'Exterior Detailing, Medium Vehicles, Diesel',
            ],
            [
                'id' => 74,
                'name' => 'Cleaning',
                'price' => 3590.00,
                'description' => 'Interior Detailing, Medium Vehicles, Diesel',
            ],
            [
                'id' => 75,
                'name' => 'Cleaning',
                'price' => 9550.00,
                'description' => 'Complete Auto Detailing (Engine,Exterior,Interior,Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Medium Vehicles, Diesel',
            ],
            [
                'id' => 76,
                'name' => 'Cleaning',
                'price' => 1350.00,
                'description' => 'Waxing(Microtex), Medium Vehicles, Diesel',
            ],


            //Maintenance Medium Vehicle Diesel
            [
                'id' => 77,
                'name' =>'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Electronic 4-Wheel Alignment, Medium Vehicles, Diesel',
            ],
            [
                'id' => 78,
                'name' => 'Maintenance & Repair',
                'price' => 325.00,
                'description' => 'Electronic Wheel Balancing/Tire
                (Add-on Flat weights,Wheel Weights,Bostik), Medium Vehicles, Diesel',
            ],
            [
                'id' => 79,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Tire Mounting/Tire, Medium Vehicles, Diesel',
            ],
            [
                'id' => 80,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Vulcanizing/Tire (Plus Patches & Chemicure), Medium Vehicles, Diesel',
            ],
            [
                'id' => 81,
                'name' => 'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Open/Clean & Adjust All Breaks, Medium Vehicles, Diesel',
            ],
            [
                'id' => 82,
                'name' => 'Maintenance & Repair',
                'price' => 800.00,
                'description' => 'Check-up Charge (Under Chassis,Engine,Aircon,Electrical), Medium Vehicles, Diesel',
            ],





                  
            // Cleaning Large Vehicle Diesel
            [
                'id' => 83,
                'name' => 'Cleaning',
                'price' => 420.00,
                'description' => 'Car Wash, Large Vehicle, Diesel',
            ],
            [
                'id' => 84,
                'name' => 'Cleaning',
                'price' => 350.00,
                'description' => 'Vacuum, Large Vehicles, Diesel',
            ],
            [
                'id' => 85,
                'name' => 'Cleaning',
                'price' => 560.00,
                'description' => 'Engine Wash, Large Vehicles, Diesel',
            ],
            [
                'id' => 86,
                'name' => 'Cleaning',
                'price' => 490.00,
                'description' => 'Under Chassis Wash, Large Vehicles, Diesel',
            ],
            [
                'id' => 87,
                'name' => 'Cleaning',
                'price' => 1380.00,
                'description' => 'Promo Package (Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Large Vehicles, Diesel',
            ],
            [
                'id' => 88,
                'name' => 'Cleaning',
                'price' => 2070.00,
                'description' => 'Engine Detailing, Large Vehicles, Diesel',
            ],
            [
                'id' => 89,
                'name' => 'Cleaning',
                'price' => 7590.00,
                'description' => 'Exterior Detailing, Large Vehicles, Diesel',
            ],
            [
                'id' => 90,
                'name' => 'Cleaning',
                'price' => 4350.00,
                'description' => 'Interior Detailing, Large Vehicles, Diesel',
            ],
            [
                'id' => 91,
                'name' => 'Cleaning',
                'price' => 1190.00,
                'description' => 'Complete Auto Detailing (Engine,Exterior,Interior,Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Large Vehicles, Diesel',
            ],
            [
                'id' => 92,
                'name' => 'Cleaning',
                'price' => 1590.00,
                'description' => 'Waxing(Microtex), Large Vehicles, Diesel',
            ],


            //Maintenance Large Vehicle Diesel
            [
                'id' => 93,
                'name' =>'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Electronic 4-Wheel Alignment, Large Vehicles, Diesel',
                
            ],
            [
                'id' => 94,
                'name' => 'Maintenance & Repair',
                'price' => 325.00,
                'description' => 'Electronic Wheel Balancing/Tire
                (Add-on Flat weights,Wheel Weights,Bostik), Large Vehicles, Diesel',
            ],
            [
                'id' => 95,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Tire Mounting/Tire, Large Vehicles, Diesel',
            ],
            [
                'id' => 96,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Vulcanizing/Tire (Plus Patches & Chemicure), Large Vehicles, Diesel',
            ],
            [
                'id' => 97,
                'name' => 'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Open/Clean & Adjust All Breaks, Large Vehicles, Diesel',
            ],
            [
                'id' => 98,
                'name' => 'Maintenance & Repair',
                'price' => 800.00,
                'description' => 'Check-up Charge (Under Chassis,Engine,Aircon,Electrical), Large Vehicles, Diesel',
            ],


            
                  
            // Cleaning Large Vehicle Gasoline
            [
                'id' => 99,
                'name' => 'Cleaning',
                'price' => 420.00,
                'description' => 'Car Wash, Large Vehicle, Gasoline',
            ],
            [
                'id' => 100,
                'name' => 'Cleaning',
                'price' => 350.00,
                'description' => 'Vacuum, Large Vehicles, Gasoline',
            ],
            [
                'id' => 101,
                'name' => 'Cleaning',
                'price' => 560.00,
                'description' => 'Engine Wash, Large Vehicles, Gasoline',
            ],
            [
                'id' => 102,
                'name' => 'Cleaning',
                'price' => 490.00,
                'description' => 'Under Chassis Wash, Large Vehicles, Gasoline',
            ],
            [
                'id' => 103,
                'name' => 'Cleaning',
                'price' => 1380.00,
                'description' => 'Promo Package (Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Large Vehicles, Gasoline',
            ],
            [
                'id' => 104,
                'name' => 'Cleaning',
                'price' => 2070.00,
                'description' => 'Engine Detailing, Large Vehicles, Gasoline',
            ],
            [
                'id' => 105,
                'name' => 'Cleaning',
                'price' => 7590.00,
                'description' => 'Exterior Detailing, Large Vehicles, Gasoline',
            ],
            [
                'id' => 106,
                'name' => 'Cleaning',
                'price' => 4350.00,
                'description' => 'Interior Detailing, Large Vehicles, Gasoline',
            ],
            [
                'id' => 107,
                'name' => 'Cleaning',
                'price' => 1190.00,
                'description' => 'Complete Auto Detailing (Engine,Exterior,Interior,Car Wash,Vacuum,Engine Wash,Under Chassis Wash), Large Vehicles, Gasoline',
            ],
            [
                'id' => 108,
                'name' => 'Cleaning',
                'price' => 1590.00,
                'description' => 'Waxing(Microtex), Large Vehicles, Gasoline',
            ],


            //Maintenance Large Vehicle Diesel
            [
                'id' => 109,
                'name' =>'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Electronic 4-Wheel Alignment, Large Vehicles, Gasoline',
            ],
            [
                'id' => 110,
                'name' => 'Maintenance & Repair',
                'price' => 325.00,
                'description' => 'Electronic Wheel Balancing/Tire
                (Add-on Flat weights,Wheel Weights,Bostik), Large Vehicles, Gasoline',
            ],
            [
                'id' => 111,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Tire Mounting/Tire, Large Vehicles, Gasoline',
            ],
            [
                'id' => 112,
                'name' => 'Maintenance & Repair',
                'price' => 470.00,
                'description' => 'Vulcanizing/Tire (Plus Patches & Chemicure), Large Vehicles, Gasoline',
            ],
            [
                'id' => 113,
                'name' => 'Maintenance & Repair',
                'price' => 2100.00,
                'description' => 'Open/Clean & Adjust All Breaks, Large Vehicles, Gasoline',
            ],
            [
                'id' => 114,
                'name' => 'Maintenance & Repair',
                'price' => 800.00,
                'description' => 'Check-up Charge (Under Chassis,Engine,Aircon,Electrical), Large Vehicles, Gasoline',
            ],
            [
                'id' => 908070,
                'name' => 'PnF Reservation',
                'price' => 0.00,
                'description' => 'Online Booking with Parking at PnF',
            ],






        ];

        DB::table('products')->insert($products);
    }
}
