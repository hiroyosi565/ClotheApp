<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_id' => 1,
            'name' => 'Outer'
        ]);
        DB::table('categories')->insert([
            'category_id' => 2,
            'name' => 'Tops'
        ]);
        DB::table('categories')->insert([
            'category_id' => 3,
            'name' => 'Bottoms'
        ]);
        DB::table('categories')->insert([
            'category_id' => 4,
            'name' => 'ACC'
        ]);
    }
}
