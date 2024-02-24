<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([

            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            ],

            // User

            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',
            ],
 
        ]);
        DB::table('book_areas')->truncate();
        DB::table('book_areas')->insert([

            // Admin
            [
                'image' => 'book-img2.jpg',
                'short_title' => 'Honeymoon Suite',
                'main_title' => 'We Are the Best in All-time & So Please Get a Quick Booking',
                'short_desc' => 'Park N Fly is one of the best resorts in the global market and that\'s why you will get a luxury life period on the global market. We always
                provide you a special support for all of our guests and that\'s will  be the main reason to be the most popular.',
                'link_url' => 'google.com'
            ],
            
 
        ]);
        DB::table('room_numbers')->truncate();
        DB::table('room_numbers')->insert([

            // Admin
            [
                'rooms_id' => '1',
                'room_type_id' => '1',
                'room_no' => '101',
                'status' => '1',
                
            ],
            // Admin
            [
                'rooms_id' => '2',
                'room_type_id' => '1',
                'room_no' => '102',
                'status' => '1',
            ],
 
        ]);
        DB::table('rooms')->truncate();
        DB::table('rooms')->insert([

            // Admin
            [
                'roomtype_id' => '1',
                'total_adult' => '2',
                'total_child' => '1',
                'room_capacity' => '2',
                'image' => 'book-img2.jpg',
                'price' => '2000',
                'size' => '60 sq.m',
                'view' => 'Seaside Views',
                'bed_style' => 'Queen',
                'short_desc' => 'Clean',
                'description' => 'Clean and Affordable',
                'status' => '1', 
            ],
            // Admin
            [
                'roomtype_id' => '2',
                'total_adult' => '2',
                'total_child' => '1',
                'room_capacity' => '3',
                'image' => 'book-img3.jpg',
                'price' => '3500',
                'size' => '60 sq.m',
                'view' => 'Ammenities Views',
                'bed_style' => 'King',
                'short_desc' => 'Clean',
                'description' => 'Clean and Affordable',
                'status' => '1', 
            ],
 
        ]);
        DB::table('room_types')->truncate();
        DB::table('room_types')->insert([

            // Admin
            [
                'name' => 'Single Bed',
            ],
            // Admin
            [
                'name' => 'Double Bed',
            ],
 
        ]);
        DB::table('site_settings')->truncate();
        DB::table('site_settings')->insert([

            // Admin
            [
                'phone' => '555-1234',
                'address' => 'Manila PH',
                'email' => 'parknfly@gmail.com',
                
            ],
 
        ]);
    }
}
