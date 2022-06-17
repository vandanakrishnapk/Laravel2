<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'abcd',
            'password'=>'abcdf',
            'age'=>'21',
            'email'=>'abcd@gmail.com',
        ]);
        User::create([
            'username'=>'Anupama',
            'password'=>'@8we9fhj',
            'age'=>'25',
            'email'=>'anupama@gmail.com',
        ]);
    }
}
