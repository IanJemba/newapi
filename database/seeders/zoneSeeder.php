<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Specific zones to insert
        $zones = [
            ['name' => 'Zone A', 'price_per_hour' => 5],
            ['name' => 'Zone B', 'price_per_hour' => 7],
            ['name' => 'Zone C', 'price_per_hour' => 10],
            ['name' => 'Zone D', 'price_per_hour' => 12],
            ['name' => 'Zone E', 'price_per_hour' => 15],
        ];

        // Insert each zone record
        foreach ($zones as $zone) {
            DB::table('zones')->insert([
                'name' => $zone['name'],
                'price_per_hour' => $zone['price_per_hour'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
