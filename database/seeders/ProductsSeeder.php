<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'price' => '100.000',
                'name' => 'May cau'
            ],
            [
                'id' => 2,
                'price' => '20.000',
                'name' => 'Bup be'
            ],
            [
                'id' => 3,
                'price' => '30.000',
                'name' => 'Sieu nhan'
            ],
            [
                'id' => 4,
                'price' => '20.000',
                'name' => 'Xep hinh'
            ],
            [
                'id' => 5,
                'price' => '360.000',
                'name' => 'Xe lambo dieu khien tu xa'
            ],
            [
                'id' => 6,
                'price' => '110.000',
                'name' => 'Ben 10'
            ],
            [
                'id' => 7,
                'price' => '150.000',
                'name' => 'Thu nhun'
            ],
            [
                'id' => 8,
                'price' => '200.000',
                'name' => 'Xe ba banh'
            ],
            [
                'id' => 9,
                'price' => '340.000',
                'name' => 'Dan do choi'
            ],
            [
                'id' => 10,
                'price' => '460.000',
                'name' => 'May xuc'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
