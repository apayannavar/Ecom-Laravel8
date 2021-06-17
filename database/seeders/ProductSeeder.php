<?php

namespace Database\Seeders;

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
            [
                'name'=>'Mangoes',
                'price'=>'Rs.500/kg',
                'description'=>'Fresh Ratnagiri Mangoes',
                'category'=>'fruits',
                'gallery'=>'https://images.unsplash.com/photo-1604910606831-256d4906ab64?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80'
            ],
            [
                'name'=>'Apples',
                'price'=>'Rs.100/kg',
                'description'=>'Fresh Ratnagiri Apples',
                'category'=>'fruits',
                'gallery'=>'https://images.unsplash.com/photo-1569870499705-504209102861?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=358&q=80'
            ],
            [
                'name'=>'Brinjal',
                'price'=>'Rs.50/kg',
                'description'=>'Fresh Organic Brinjal',
                'category'=>'vegetables',
                'gallery'=>'https://images.unsplash.com/photo-1579843692771-027a4a8fda48?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80'
            ],
            [
                'name'=>'Califlower',
                'price'=>'Rs.40/kg',
                'description'=>'Fresh Organic Cauliflower',
                'category'=>'vegetables',
                'gallery'=>'https://images.unsplash.com/photo-1566842600175-97dca489844f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80'
            ],
            [
                'name'=>'Sunflower',
                'price'=>'Rs.25/kg',
                'description'=>'Fresh from flower fields',
                'category'=>'flowers',
                'gallery'=>'https://images.unsplash.com/photo-1597848212624-a19eb35e2651?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80'
            ]


        ]);
    }
}
