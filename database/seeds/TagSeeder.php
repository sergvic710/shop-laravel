<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag')->insert([
            'id' => 1,
            'name' => 'Кондитерский',
            'code' => 'konditer'
        ]);
        DB::table('tag')->insert([
            'id' => 2,
            'name' => 'Тепловое',
            'code' => 'teplovoe'
        ]);
        DB::table('tag')->insert([
            'id' => 3,
            'name' => 'Электромеханическое',
            'code' => 'elektromeh'
        ]);
    }
}
