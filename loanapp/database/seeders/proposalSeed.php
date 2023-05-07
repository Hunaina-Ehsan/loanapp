<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proposalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proposals')->insert([
            [        
                'id' => 1,        
                'user_id' => 1,        
                'title' => 'Small Business Loan',        
                'description' => 'I want to start a small grocery store in my area, need a loan of Rs. 500,000.',        
                'amount' => 500000,        
                'status' => 'pending',        
                'created_at' => '2022-05-08 10:30:00',    
            ],
            [        
                'id' => 2,        
                'user_id' => 2,        
                'title' => 'Home Renovation Loan',        
                'description' => 'I want to renovate my house, need a loan of Rs. 1,000,000.',        
                'amount' => 1000000,        
                'status' => 'approved',        
                'created_at' => '2022-06-01 15:45:00',    
            ]
        ]); // seeding not happening
    }
}
