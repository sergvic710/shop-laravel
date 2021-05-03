<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'id' => 1,
            'name' => 'Кондитерский пресс-шприц для печенья Cookies(580)',
            'description' => 'admin@domain.ru',
            'price' => 3125 ,
            'foto' => 'http://biopiter.ru/image/cache/catalog/holod/novaja2/imperia-cookies-80x80.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 2,
            'name' => 'Машина для измельчения черствой хлебобулочной продукции TORNADOS',
            'description' => 'admin@domain.ru',
            'price' => 29517,
            'foto' => 'http://biopiter.ru/image/cache/catalog/holod/novaja2/novaja2/ddd3bfa34d746f10b9d0db18e4119d2d-80x80.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 3,
            'name' => 'Машина для отливки бисквита ROLLERBISCUIT',
            'description' => 'admin@domain.ru',
            'price' => 79491,
            'foto' => 'http://biopiter.ru/image/cache/catalog/holod/novaja2/novaja2/5443e057cd9cc8630afc9b7525323ca5-80x80.jpg',
        ]);
        DB::table('product')->insert([
            'id' => 4,
            'name' => 'Машина для производства равиоли механическая Manual Ravioli Maker(780)',
            'description' => 'admin@domain.ru',
            'price' => 143360,
            'foto' => 'http://biopiter.ru/image/cache/catalog/holod/novaja2/543x303_1_00_1_8b6d82b2776ed0f120e0dd9b9197cd49-80x80.jpg',
        ]);
    }
}
