<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId'=> 1,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 2,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 3,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 4,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 5,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 6,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 7,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 8,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 9,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 10,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 11,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 12,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 13,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 14,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 15,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 16,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 17,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 18,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 19,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 20,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 21,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 22,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 23,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 24,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 25,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 26,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 27,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 28,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 29,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],
            [
                'orderId'=> 30,
                'productId'=> 1,
                'quantity'=> '10',
                'amount'=> 10000
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
