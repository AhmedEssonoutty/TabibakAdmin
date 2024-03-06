<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regionsJson = file_get_contents(public_path('json/regions.json'));
        $regionsData = json_decode($regionsJson, true);
        foreach ($regionsData as $regionData) {
            $region = new Region();
            $region->name = json_encode([
                'en' => $regionData['en'],
                'ar' => $regionData['ar'],
            ],JSON_UNESCAPED_UNICODE);
            $region->save();
        }
    }
}
