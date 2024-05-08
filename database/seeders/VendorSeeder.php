<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $vendor=Vendor::create(['name'=>'IKEI','nif'=>'111334456H']);
       $vendor->save();
       $vendor=Vendor::create(['name'=>'Roci','nif'=>'111224456H']);
       $vendor->save();
       $vendor=Vendor::create(['name'=>'kibuqui','nif'=>'101334456H']);
       $vendor->save();

    }
}
