<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');


        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        
        $csr = User::create([
            'name' => 'Csr Role',
            'email' => 'csr@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');
    }
}
