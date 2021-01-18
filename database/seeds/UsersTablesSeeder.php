<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'              =>  'Admin',
        //     'email'             =>  'admin@gmail.com',
        //     'password'          =>  Hash::make('admin123'),
        //     'remember_token'    =>  Str::random(10),
        // ]);
        // User::create([
        //     'name'              =>  'Admin',
        //     'email'             =>  'newadmin@gmail.com',
        //     'password'          =>  Hash::make('newadmin'),
        //     'remember_token'    =>  Str::random(10),
        // ]);
        User::create([
            'name'              =>  'Admin',
            'email'             =>  'lppm@machung.ac.id',
            'password'          =>  Hash::make('admlppm99'),
            'remember_token'    =>  Str::random(10),
        ]);
    }
}
