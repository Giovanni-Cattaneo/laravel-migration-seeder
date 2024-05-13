<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {
            Train::create([
                'brand' => 'Italo',
                'departures_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'day_of_departures' => '2024-06-10',
                'sku' => 152535,
                'carriages' => 25,
                'on_time' => 0,
                'canceled' => 1,

            ]);
        }
    }
}
