<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'zaken83@outlook.com',
                'password' => '$2y$10$SvpJljqbH8Xr6vwEMFn4be50i2RCvT0fIjOrj0QzM4Jdq8iVg9gMm',
                'remember_token' => NULL,
                'created_at' => '2023-03-13 12:07:00',
                'updated_at' => '2023-03-13 12:07:00',
            ),
        ));
        
        
    }
}