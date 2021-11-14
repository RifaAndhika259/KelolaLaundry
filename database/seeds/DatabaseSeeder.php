<?php

use App\Member;
use App\Outlet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProdukSeeder::class,
            MemberSeeder::class,
            OuletsSeeder::class,
        ]);
    }
}
