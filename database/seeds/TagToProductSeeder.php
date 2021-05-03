<?php

use Illuminate\Database\Seeder;

class TagToProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_to_product')->insert([
            'product_id' => 1,
            'tag_id' => 1,
        ]);
        DB::table('tag_to_product')->insert([
            'product_id' => 1,
            'tag_id' => 1,
        ]);
        DB::table('tag_to_product')->insert([
            'product_id' => 2,
            'tag_id' => 2,
        ]);
        DB::table('tag_to_product')->insert([
            'product_id' => 3,
            'tag_id' => 3,
        ]);
        DB::table('tag_to_product')->insert([
            'product_id' => 4,
            'tag_id' => 3,
        ]);
    }
}
