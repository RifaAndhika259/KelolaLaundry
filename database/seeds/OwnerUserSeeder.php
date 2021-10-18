<?php

use Illuminate\Database\Seeder;
use App\User;

class OwnerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('owner123'),
        ]);
    }
}
