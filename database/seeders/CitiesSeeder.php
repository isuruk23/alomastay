<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [

            [
                'title' => 'Kandy',
                'description' => 'Cultural capital of Sri Lanka, home to the Sacred Tooth Relic and surrounded by scenic hills.',
                'image1' => 'kandy.jpg',
            ],
            [
                'title' => 'Nuwara Eliya',
                'description' => 'Known as Little England, famous for cool climate, tea plantations, and colonial architecture.',
                'image1' => 'nuwara-eliya.jpg',
            ],
            [
                'title' => 'Dambulla',
                'description' => 'Historic town famous for the Dambulla Cave Temple and nearby ancient heritage sites.',
                'image1' => 'dambulla.jpg',
            ],
            [
                'title' => 'Sigiriya',
                'description' => 'Home of the iconic Sigiriya Rock Fortress, a UNESCO World Heritage Site with stunning views.',
                'image1' => 'sigiriya.jpg',
            ],
            [
                'title' => 'Ella',
                'description' => 'Mountain village known for hiking trails, waterfalls, and panoramic viewpoints.',
                'image1' => 'ella.jpg',
            ],
            [
                'title' => 'Galle',
                'description' => 'Historic coastal city featuring the Dutch Fort, beaches, and colonial streets.',
                'image1' => 'galle.jpg',
            ],
            [
                'title' => 'Bentota',
                'description' => 'Popular beach destination with water sports and relaxing seaside resorts.',
                'image1' => 'bentota.jpg',
            ],
            [
                'title' => 'Yala',
                'description' => 'Gateway to Yala National Park, famous for leopard sightings and wildlife safaris.',
                'image1' => 'yala.jpg',
            ],
        ];

        DB::table('cities')->insert($cities);
    }
}
