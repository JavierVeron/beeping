<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class orders_lines extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
        DB::table('orders_lines')->insert(['order_id' => rand(1, 20), 'qty' => rand(1, 10), 'product_id' => rand(1, 10)]);
    }
}
