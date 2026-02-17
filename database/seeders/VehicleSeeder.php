<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'name' => 'Toyota KDH Van',
                'vehicle_number' => 'WP CAB-4587',
                'type' => 'Van',
                'seats' => 10,
                'price_per_km' => 120,
                'price_per_day' => 25000,
                'notes' => 'Ideal for airport transfers and small groups',
                'status' => 1,
            ],
            [
                'name' => 'Toyota Prius',
                'vehicle_number' => 'WP CAR-2234',
                'type' => 'Car',
                'seats' => 3,
                'price_per_km' => 90,
                'price_per_day' => 18000,
                'notes' => 'Comfortable for city travel',
                'status' => 1,
            ],
            [
                'name' => 'KDH High Roof',
                'vehicle_number' => 'WP VAN-7788',
                'type' => 'Van',
                'seats' => 14,
                'price_per_km' => 140,
                'price_per_day' => 30000,
                'notes' => 'Best for tour groups',
                'status' => 1,
            ],
            [
                'name' => 'Mini Coach',
                'vehicle_number' => 'WP BUS-9921',
                'type' => 'Bus',
                'seats' => 25,
                'price_per_km' => 200,
                'price_per_day' => 45000,
                'notes' => 'Large group transport',
                'status' => 1,
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
