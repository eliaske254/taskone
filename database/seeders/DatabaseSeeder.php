<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
             $products = [

             ['name' => 'Shirt','price' => 100,'category_id' => 1,],
             ['name' => 'Pants','price' => 100,'category_id' => 1,],
             ['name' => 'Shoes','price' => 100,'category_id' => 1,],
             ['name' => 'Socks','price' => 100,'category_id' => 1,],
             ['name' => 'Hat','price' => 100,'category_id' => 1,],
             ['name' => 'Gloves','price' => 100,'category_id' => 1,],
             ['name' => 'Scarf','price' => 100,'category_id' => 1,],
             ['name' => 'Sunglasses','price' => 100,'category_id' => 1,],
             ['name' => 'Belt','price' => 100,'category_id' => 1,],
             ['name' => 'Watch','price' => 100,'category_id' => 1,],
             ['name' => 'Wallet','price' => 100,'category_id' => 1,],
             ['name' => 'Backpack','price' => 100,'category_id' => 1,],
             ['name' => 'Suitcase','price' => 100,'category_id' => 1,],
             ['name' => 'Tie','price' => 100,'category_id' => 1,],
             ['name' => 'Bra','price' => 100,'category_id' => 1,],
             ['name' => 'Underwear','price' => 100,'category_id' => 1,],
             ['name' => 'Sweater','price' => 100,'category_id' => 1,],
             ['name' => 'Coat','price' => 100,'category_id' => 1,],
             ['name' => 'Dress','price' => 100,'category_id' => 1,],
             ['name' => 'Skirt','price' => 100,'category_id' => 1,],
             ['name' => 'Swimsuit','price' => 100,'category_id' => 1,],
             ['name' => 'Shorts','price' => 100,'category_id' => 1,],
             ['name' => 'Umbrella','price' => 100,'category_id' => 1,]
                 ];


         foreach ($products as $product) {
             Product::create($product);
         }


//        Product::factory(10)->create();


    }
}
