<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://sscontent.secure.footprint.net/thumb/500/500/products/5/optimum-nutrition_100-whey-gold-standard-5-lbs-2273g_2.jpg',
            'title' => 'Gold Standerd Whey',
            'discription' => 'Packed With Whey Protein Isolates And Fast-Acting HYDROWHEY Whey Peptides!',
            'category' => '1',
            'price' => 30,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/m/a/mammothbucket_1_1_13.jpg',
            'title' => 'Mammoth Mass Gainer',
            'discription' => 'Mammoth is designed for everybody who wants to gain some serious weight',
            'category' => '2',
            'price' => 45,
            'featured' => 0
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/e/p/epic_1.jpg',
            'title' => 'Epic V2',
            'discription' => 'Creatine that stimulates muscle growth',
            'category' => '3',
            'price' => 35,
            'featured' => 1
        ]);

        $product->save();
    }
}
