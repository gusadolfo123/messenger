<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Juan',
        	'email' => 'prueba@hotmail.com',
        	'password' =>  bcrypt('123456')
        ]);
        User::create([
            'name' => 'Pepito',
            'email' => 'pepito@hotmail.com',
            'password' =>  bcrypt('123456')
        ]);

    }
}
