<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contractSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contract')->insert([
            [        
                'id' => 1,        
                'proposal_id' => 1,        
                'applicant_id' => 1,        
                'investor_id' => 2,    
            ],
            [        
                'id' => 2,        
                'proposal_id' => 2,        
                'applicant_id' => 2,        
                'investor_id' => 1,    
            ],
    ]
    );
    }
}
