<?php

use Illuminate\Database\Seeder;
use App\Outlet;
class OuletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $Outlet = Outlet::create([
       'name' => 'laundry berkah',
       'address' => 'JL Kampung Awi',
       'telephone' => '0810210121012'
    ]);
    $Outlet = Outlet::create([
        'name' => 'Sahabat laundry',
        'address' => 'JL cibaduyut',
        'telephone' => '0810808208023'
     ]);
     $Outlet = Outlet::create([
        'name' => 'bandung laundry',
        'address' => 'JL katapang',
        'telephone' => '081083497123'
     ]);
    }
}
