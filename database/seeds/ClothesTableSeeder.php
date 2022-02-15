<?php

use Illuminate\Database\Seeder;

class ClothesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clothes')->insert([
                'brand' => '古着',
                'cost' => '6800',
                'body' => '府内町のSUNQGOで購入',
                'category_id' => 1,
                'user_id' => 1,
                'favorite' => 4,
                'image_path' => 'aaa',
                'bought_at' => '2022-02-06',
            ]);
        
    
    }
}
