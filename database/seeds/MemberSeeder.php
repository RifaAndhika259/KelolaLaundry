<?php

use Illuminate\Database\Seeder;
use App\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $Member = Member::create([
      'name' => 'budi',
      'telephone' => '0820192010852',
      'email' => 'budi@gmail.com',
     ]);
     $Member = Member::create([
        'name' => 'Sukma',
        'telephone' => '08212118208234',
        'email' => 'budi@gmail.com',
       ]);
     $Member = Member::create([
      'name' => 'billy',
      'telephone' => '0890192018648',
      'email' => 'billy@gmail.com',
     ]);
    }
}
