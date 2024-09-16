<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            ['user_id' => 1, 'plate_number' => 'ABC1234', 'brand' => 'Toyota', 'model' => 'Camry', 'year' => 2019, 'color' => 'White', 'type' => 'Sedan', 'fuel' => 'Gasoline'],
            ['user_id' => 2, 'plate_number' => 'XYZ5678', 'brand' => 'Honda', 'model' => 'Accord', 'year' => 2020, 'color' => 'Black', 'type' => 'Sedan', 'fuel' => 'Hybrid'],
            ['user_id' => 3, 'plate_number' => 'LMN8901', 'brand' => 'Ford', 'model' => 'F-150', 'year' => 2018, 'color' => 'Blue', 'type' => 'Truck', 'fuel' => 'Diesel'],
            ['user_id' => 4, 'plate_number' => 'GHI2345', 'brand' => 'Tesla', 'model' => 'Model 3', 'year' => 2021, 'color' => 'Red', 'type' => 'Sedan', 'fuel' => 'Electric'],
            ['user_id' => 5, 'plate_number' => 'JKL6789', 'brand' => 'Chevrolet', 'model' => 'Tahoe', 'year' => 2017, 'color' => 'Silver', 'type' => 'SUV', 'fuel' => 'Gasoline'],
            ['user_id' => 6, 'plate_number' => 'QWE1234', 'brand' => 'Nissan', 'model' => 'Altima', 'year' => 2019, 'color' => 'Gray', 'type' => 'Sedan', 'fuel' => 'Gasoline'],
            ['user_id' => 7, 'plate_number' => 'RTY5678', 'brand' => 'BMW', 'model' => 'X5', 'year' => 2020, 'color' => 'Black', 'type' => 'SUV', 'fuel' => 'Diesel'],
            ['user_id' => 8, 'plate_number' => 'UIO8901', 'brand' => 'Jeep', 'model' => 'Wrangler', 'year' => 2021, 'color' => 'Green', 'type' => 'SUV', 'fuel' => 'Gasoline'],
            ['user_id' => 9, 'plate_number' => 'PAS2345', 'brand' => 'Audi', 'model' => 'Q7', 'year' => 2018, 'color' => 'White', 'type' => 'SUV', 'fuel' => 'Hybrid'],
            ['user_id' => 10, 'plate_number' => 'DFG6789', 'brand' => 'Hyundai', 'model' => 'Elantra', 'year' => 2022, 'color' => 'Blue', 'type' => 'Sedan', 'fuel' => 'Gasoline'],
        ];

        // Insert each vehicle record
        foreach ($vehicles as $vehicle) {
            DB::table('vehicles')->insert([
                'user_id' => $vehicle['user_id'],
                'plate_number' => $vehicle['plate_number'],
                'brand' => $vehicle['brand'],

                'model' => $vehicle['model'],
                'year' => $vehicle['year'],
                'color' => $vehicle['color'],
                'type' => $vehicle['type'],
                'fuel' => $vehicle['fuel'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
