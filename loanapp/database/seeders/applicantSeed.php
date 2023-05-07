<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class applicantSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicant')->insert([    
        [        
            'id' => 1,
            'user_id' => 1,
            'name' => 'Ali Khan',        
            'address' => 'House no. 123, Street no. 5, Lahore',        
            'phone' => '+92-345-6789101',        
            'age' => 25,  
        ],
        [        
            'id' => 2,        
            'user_id' => 3,        
            'name' => 'Sara Ali',        
            'address' => 'Apartment no. 101, Block B, Karachi',        
            'phone' => '+92-300-1234567',        
            'age' => 28,  
        ],
    ]);
    }
}
