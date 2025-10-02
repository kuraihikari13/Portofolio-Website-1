<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Temporary Admin',
            'email' => 'sedih@momo.com',
            'password' => bcrypt('123'),
            'cred' => '1' 
        ]);
    }
}
