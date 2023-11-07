<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class orders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('es_ES');
        
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
        DB::table('orders')->insert(['order_ref' => $faker->company, 'customer_name' => $faker->name]);
    }
}
