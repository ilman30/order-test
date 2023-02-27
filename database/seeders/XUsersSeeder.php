<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class XUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x_users')->insert([
            'user_id' => Uuid::uuid4()->toString(),
            'username' => 'example',
            'full_name' => 'Example',
            'email' => 'example@gmail.com',
            'phone_number' => '0213488',
            'password' => bcrypt('example'),
            'token' => null,
            'is_login' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
