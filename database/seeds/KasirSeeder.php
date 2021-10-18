<?php

use Illuminate\Database\Seeder;
use App\User;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => bcrypt('kasir@gmailcom'),
        ]);
    }
}
