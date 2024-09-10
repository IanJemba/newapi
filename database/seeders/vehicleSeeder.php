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
        // Specific vehicle data to insert
        $vehicles = [
            ['user_id' => 1, 'plate_number' => 'ABC1234'],
            ['user_id' => 2, 'plate_number' => 'XYZ5678'],
            ['user_id' => 3, 'plate_number' => 'LMN8901'],
            ['user_id' => 4, 'plate_number' => 'GHI2345'],
            ['user_id' => 5, 'plate_number' => 'JKL6789'],
            ['user_id' => 6, 'plate_number' => 'QWE1234'],
            ['user_id' => 7, 'plate_number' => 'RTY5678'],
            ['user_id' => 8, 'plate_number' => 'UIO8901'],
            ['user_id' => 9, 'plate_number' => 'PAS2345'],
            ['user_id' => 10, 'plate_number' => 'DFG6789'],
        ];

        // Insert each vehicle record
        foreach ($vehicles as $vehicle) {
            DB::table('vehicles')->insert([
                'user_id' => $vehicle['user_id'],
                'plate_number' => $vehicle['plate_number'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
