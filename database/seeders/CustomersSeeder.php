<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id'=> 1,
                'name'=> 'Hung',
                'address'=> 'Ha Tay'
            ],
            [
                'id'=> 2,
                'name'=> 'Lam',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 3,
                'name'=> 'Nam',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 4,
                'name'=> 'Thang',
                'address'=> 'Ha Noi'
            ],
            [
                'id'=> 5,
                'name'=> 'Tien',
                'address'=> 'Ha Noi'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
