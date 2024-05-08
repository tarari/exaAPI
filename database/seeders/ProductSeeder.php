<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Nette\Utils\Random;
use Random\Randomizer;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $names=['Pikkerflog','Kirstoppen','Saviano',
    'Culiformio','Vilovilo','FakeProduct','flipandol','Vamospalla',
    'Postalia','Carambolux','Clorofol'
    ];

    function random_not_rep(array $entry, int $len) {
        if ($len > count($entry)) {
            throw new \Exception("Array length error");
        }

        $output = [];

        while (count($output) < $len) {
            $randomIndex = rand(0, count($entry) - 1);
            $item = $entry[$randomIndex];

            if (!in_array($item, $output)) {
                $output[] = $item;
            }
        }

        return $output;
    }



    public function run(): void
    {

        $output=$this->random_not_rep($this->names,10);

        for($i=0;$i<=9;$i++){
            $rand_vendor=mt_rand(1,count(Vendor::all()));
            $vendor=Vendor::find($rand_vendor);
            $category=Category::find(mt_rand(1,count(Category::all())));
            $product=new Product();
                $product->name=$output[$i];
                $product->price=rand(1,100);
                $product->stock=rand(1,60);

            $product->vendor()->associate($vendor);
            $product->category()->associate($category);
            $product->save();

        }


    }
}
