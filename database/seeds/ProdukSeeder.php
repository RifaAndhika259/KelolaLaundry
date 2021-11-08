<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Product = Product::create([
            'object' => 'kiloan',
            'price' => '10000',
        ]);
        $Product = Product::create([
            'object' => 'boneka',
            'price' => '15000',
        ]);
        $Product = Product::create([
            'object' => 'karpet',
            'price' => '50000',
        ]);
    }
}
