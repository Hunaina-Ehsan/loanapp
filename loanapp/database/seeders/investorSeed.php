<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class investorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('investors')->insert([    
        [        
            'id' => 1,        
            'user_id' => 2,        
            'name' => 'Ahmed Hassan',        
            'address' => 'House no. 456, Street no. 12, Islamabad',        
            'phone' => '+92-333-9876543',        
            'email' => 'ahmedhassan@gmail.com',    
        ],
        [        
            'id' => 2,        
            'user_id' => 4,        
            'name' => 'Farhan Khan',        
            'address' => 'Apartment no. 202, Block C, Lahore',        
            'phone' => '+92-321-4567890',        
            'email' => 'farhankhan@hotmail.com',    
        ],
        ]);
    }
}
