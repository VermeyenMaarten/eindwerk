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
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '1',
            'price' => 30,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/m/a/mammoth-whey.jpg',
            'title' => 'Mammoth Mass Gainer',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '2',
            'price' => 45,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/e/p/epic_1.jpg',
            'title' => 'Epic V2',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '3',
            'price' => 35,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/a/m/amino_fuel_3.jpg',
            'title' => 'Amino Fuel',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '5',
            'price' => 20,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/s/m/smart-protein-vanilla-2000g_1_58.jpg',
            'title' => 'Smart Protein',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '1',
            'price' => 30,
            'featured' => 0
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/e/l/elite_mass_gainer_7.jpg',
            'title' => 'Elite Mass',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '2',
            'price' => 40,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/m/a/mass-tech-strawberry.jpg',
            'title' => 'Mass Tech',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '2',
            'price' => 40,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/s/e/serious-mass-pot.jpg',
            'title' => 'Serious Mass',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '2',
            'price' => 45,
            'featured' => 1
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/m/u/multi_women_1.jpg',
            'title' => 'Multi Women',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '4',
            'price' => 15,
            'featured' => 0
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.bodyenfitshop.nl/media/catalog/product/cache/1/image/500x/040ec09b1e35df139433887a97daa66f/b/c/bcaa_pure_caps_1_1.jpg',
            'title' => 'BCAA Pure Caps',
            'discription' => 'Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit.',
            'category' => '5',
            'price' => 15,
            'featured' => 1
        ]);

        $product->save();
    }
}
