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
      'telephone' => '089019201',
      'email' => 'budi@gmail.com',
     ]);
    }
}
