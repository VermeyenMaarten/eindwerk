<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'id' => '1',
            'name' => 'Proteins'
        ]);

        $category->save();

        $category = new \App\Category([
            'id' => '2',
            'name' => 'Mass Gainers'
        ]);

        $category->save();

        $category = new \App\Category([
            'id' => '3',
            'name' => 'Creatine'
        ]);

        $category->save();

        $category = new \App\Category([
            'id' => '4',
            'name' => 'Vitamins'
        ]);

        $category->save();

        $category = new \App\Category([
            'id' => '5',
            'name' => 'Amino Acids'
        ]);

        $category->save();
    }
}
