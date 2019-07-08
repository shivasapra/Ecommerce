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
        $user = User::create([
        	'name' => 'Shiva Sapra',
        	'email' => 'shivasapra24@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);
    }
}
