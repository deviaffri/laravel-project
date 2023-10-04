<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name'=>'admin',
            'email'=>'devi@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::Create([
            'name'=>'staff',
            'email'=>'affri@gmail.com',
            'password'=>bcrypt('rahasiaa')
        ]);
    }
}