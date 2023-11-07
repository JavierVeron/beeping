<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(['name' => 'iPhone 15 Pro Max', 'cost' => 1199]);
        DB::table('products')->insert(['name' => 'iPhone 15 Pro', 'cost' => 999]);
        DB::table('products')->insert(['name' => 'iPhone 15 Plus', 'cost' => 899]);
        DB::table('products')->insert(['name' => 'iPhone 15', 'cost' => 799]);
        DB::table('products')->insert(['name' => 'iPhone 14 Plus', 'cost' => 799]);
        DB::table('products')->insert(['name' => 'iPhone 14', 'cost' => 699]);
        DB::table('products')->insert(['name' => 'iPhone 13', 'cost' => 599]);
        DB::table('products')->insert(['name' => 'iPhone SE', 'cost' => 429]);
        DB::table('products')->insert(['name' => '20W USB-C Power Adapter', 'cost' => 19]);
        DB::table('products')->insert(['name' => '240W USB-C Charge Cable (2 m)', 'cost' => 29]);
    }
}
