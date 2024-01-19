<?php

namespace Database\Seeders;

use App\Models\VendorType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorTypes = ['Hospital', 'Clinic', 'Pharmacy', 'Lab', 'Home Care'];
        foreach ($vendorTypes as $vendorType) {
            VendorType::updateOrCreate([
                'name' => $vendorType,
            ]);
        }
    }
}
