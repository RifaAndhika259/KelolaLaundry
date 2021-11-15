<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);


        $kasir = User::create([
            'name' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => bcrypt('kasir123'),
            'role' => 'kasir'
        ]);

        $owner = User::create([
            'name' => 'owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('owner123'),
            'role' => 'owner'
        ]);

    }
}
