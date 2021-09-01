<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class AdminrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'kamrul',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'phone' => '01981337121',
        ]);
    }
}
