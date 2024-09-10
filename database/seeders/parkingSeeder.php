<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
 
class ParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example parking records
        $parkings = [
            [
                'user_id' => 1,
                'vehicle_id' => 1,
                'zone_id' => 1,
                'start_time' => Carbon::now()->subHours(2),
                'stop_time' => Carbon::now(),
                'total_price' => 10,
            ],
            [
                'user_id' => 2,
                'vehicle_id' => 2,
                'zone_id' => 2,
                'start_time' => Carbon::now()->subHours(3),
                'stop_time' => Carbon::now(),
                'total_price' => 21,
            ],
            [
                'user_id' => 3,
                'vehicle_id' => 3,
                'zone_id' => 3,
                'start_time' => Carbon::now()->subHours(1),
                'stop_time' => Carbon::now(),
                'total_price' => 10,
            ],
            [
                'user_id' => 4,
                'vehicle_id' => 4,
                'zone_id' => 4,
                'start_time' => Carbon::now()->subHours(4),
                'stop_time' => Carbon::now(),
                'total_price' => 48,
            ],
            [
                'user_id' => 5,
                'vehicle_id' => 5,
                'zone_id' => 5,
                'start_time' => Carbon::now()->subHours(5),
                'stop_time' => Carbon::now(),
                'total_price' => 75,
            ],
        ];
 
        // Insert each parking record
        foreach ($parkings as $parking) {
            DB::table('parkings')->insert([
                'user_id' => $parking['user_id'],
                'vehicle_id' => $parking['vehicle_id'],
                'zone_id' => $parking['zone_id'],
                'start_time' => $parking['start_time'],
                'stop_time' => $parking['stop_time'],
                'total_price' => $parking['total_price'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
 
 