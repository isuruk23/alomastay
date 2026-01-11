<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'name' => 'Standard Double Room',
                'intro' => 'Comfortable room ideal for couples or solo travelers.',
                'overview' => 'Includes queen bed, air conditioning, free Wi-Fi, TV, and private bathroom.',
                'size' => 250,
                'price' => 8500.00,
                'image' => 'rooms/standard-double.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deluxe Room',
                'intro' => 'Spacious room with modern amenities and balcony.',
                'overview' => 'King bed, balcony view, minibar, work desk, rain shower, and free Wi-Fi.',
                'size' => 320,
                'price' => 12500.00,
                'image' => 'rooms/deluxe.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Family Room',
                'intro' => 'Perfect for families with kids.',
                'overview' => 'Two double beds, sitting area, fridge, large bathroom, and city view.',
                'size' => 450,
                'price' => 16500.00,
                'image' => 'rooms/family.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suite Room',
                'intro' => 'Luxury suite with separate living area.',
                'overview' => 'King bed, sofa lounge, bathtub, smart TV, minibar, and premium toiletries.',
                'size' => 600,
                'price' => 24500.00,
                'image' => 'rooms/suite.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Budget Single Room',
                'intro' => 'Affordable option for short stays.',
                'overview' => 'Single bed, fan, Wi-Fi, work desk, and shared balcony.',
                'size' => 180,
                'price' => 4500.00,
                'image' => 'rooms/single.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
