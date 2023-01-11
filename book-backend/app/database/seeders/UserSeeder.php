<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::insert( ['name' => 'furumi', 'email' => 'koki_furumi@arena-pro.co.jp', 'password' => \Hash::make('123456'), 'created_at' => now(), 'updated_at' => now()] );
    }
}
