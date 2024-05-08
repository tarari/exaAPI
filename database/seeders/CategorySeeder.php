<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category=Category::create(['name'=>'Bany']);
        $category->save();
        $category=Category::create(['name'=>'Cuina']);
        $category->save();
        $category=Category::create(['name'=>'Menjador']);
        $category->save();

    }
}
