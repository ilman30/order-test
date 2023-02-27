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
        DB::table('products')->insert(
            [
                [
                    'product_id' => 'PR00001',
                    'product_name' => 'Honda Vario125',
                    'product_type_id' => 'TY00001',
                    'price' => '20000000',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'product_id' => 'PR00002',
                    'product_name' => 'Honda CB250RR',
                    'product_type_id' => 'TY00002',
                    'price' => '50000000',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'product_id' => 'PR00003',
                    'product_name' => 'Honda Revo 110',
                    'product_type_id' => 'TY00003',
                    'price' => '15000000',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'product_id' => 'PR00004',
                    'product_name' => 'Motorcycle Cover',
                    'product_type_id' => 'TY00004',
                    'price' => '50000',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
            ]
        );
    }
}
