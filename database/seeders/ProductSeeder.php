<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Create([
            'code'=>'123',
            'name'=>'pepsodent',
            'price'=>4000
        ]);
        Product::Create([
            'code'=>'456',
            'name'=>'rinso',
            'price'=>1000
        ]);
        Product::Create([
            'code'=>'789',
            'name'=>'sarimi',
            'price'=>3000
        ]);
        Product::Create([
            'code'=>'121',
            'name'=>'garnier',
            'price'=>5000
        ]);
        Product::Create([
            'code'=>'131',
            'name'=>'mama lemon',
            'price'=>2000
        ]);
    }
}
