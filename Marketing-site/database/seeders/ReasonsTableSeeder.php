<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReasonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reasons')->delete();
        
        \DB::table('reasons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ik wil dat jullie een product of dienst voor mij verkopen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ik heb een vraag over belasting of hulp nodig bij administratie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ik heb een juridische vraag',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ik wil bij jullie solliciteren',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}