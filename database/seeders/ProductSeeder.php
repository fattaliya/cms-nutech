<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Jersey Liverpool',
            'buy_price' => 1250000,
            'sell_price' => 1625000,
            'stock' => 120,
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Gitar Akustik',
            'buy_price' => 1000000,
            'sell_price' => 1300000,
            'stock' => 10,
            'category_id' => 2
        ]);

//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
//
//        DB::table('products')->insert([
//            'name' => '',
//            'buy_price' => '',
//            'sell_price' => '',
//            'stock' => '',
//            'category_id' => ''
//        ]);
    }
}
