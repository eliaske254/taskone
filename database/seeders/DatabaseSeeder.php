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
             ['name' => 'Pants','price' => 150,'category_id' => 1,],
             ['name' => 'Shoes','price' => 105,'category_id' => 1,],
             ['name' => 'Socks','price' => 110,'category_id' => 1,],
             ['name' => 'Hat','price' => 130,'category_id' => 1,],
             ['name' => 'Gloves','price' => 113,'category_id' => 1,],
             ['name' => 'Scarf','price' => 111,'category_id' => 1,],
             ['name' => 'Sunglasses','price' => 100,'category_id' => 1,],
             ['name' => 'Belt','price' => 160,'category_id' => 1,],
             ['name' => 'Watch','price' => 111,'category_id' => 1,],
             ['name' => 'Wallet','price' => 112,'category_id' => 1,],
             ['name' => 'Backpack','price' => 200,'category_id' => 1,],
             ['name' => 'Suitcase','price' => 210,'category_id' => 1,],
             ['name' => 'Tie','price' => 110,'category_id' => 1,],
             ['name' => 'Bra','price' => 110,'category_id' => 1,],
             ['name' => 'Underwear','price' => 120,'category_id' => 1,],
             ['name' => 'Sweater','price' => 200,'category_id' => 1,],
             ['name' => 'Coat','price' => 300,'category_id' => 1,],
             ['name' => 'Dress','price' => 200,'category_id' => 1,],
             ['name' => 'Skirt','price' => 200,'category_id' => 1,],
             ['name' => 'Swimsuit','price' => 100,'category_id' => 1,],
             ['name' => 'Shorts','price' => 230,'category_id' => 1,],
             ['name' => 'Umbrella','price' => 110,'category_id' => 1,]
                 ];


         foreach ($products as $product) {
             Product::create($product);
         }


//        Product::factory(10)->create();


    }
}
