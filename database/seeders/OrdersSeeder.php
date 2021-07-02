<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id'=> 1,
                'creatAt'=> '9/3/2001',
                'customerId'=> 1
            ],
            [
                'id'=> 2,
                'creatAt'=> '2/1/2002',
                'customerId'=> 1
            ],
            [
                'id'=> 3,
                'creatAt'=> '23/9/2003',
                'customerId'=> 1
            ],
            [
                'id'=> 4,
                'creatAt'=> '4/6/2001',
                'customerId'=> 2
            ],
            [
                'id'=> 5,
                'creatAt'=> '28/6/2004',
                'customerId'=> 2
            ],
            [
                'id'=> 6,
                'creatAt'=> '28/10/2002',
                'customerId'=> 2
            ],
            [
                'id'=> 7,
                'creatAt'=> '3/12/2016',
                'customerId'=> 3
            ],
            [
                'id'=> 8,
                'creatAt'=> '4/2/2021',
                'customerId'=> 3
            ],
            [
                'id'=> 9,
                'creatAt'=> '4/10/2014',
                'customerId'=> 3
            ],
            [
                'id'=> 10,
                'creatAt'=> '5/10/2020',
                'customerId'=> 5
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
