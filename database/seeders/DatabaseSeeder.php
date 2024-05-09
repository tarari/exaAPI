<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user=User::create([
            'name' => 'linux',
            'email' => 'linux@2daw.com',
            'password' => Hash::make('linuxlinux'),

        ]);
        $user->save();

        $this->call([
            VendorSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class]);
    }
}
