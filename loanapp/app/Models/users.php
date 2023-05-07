<?php

namespace App\Models;

use Applicant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class users extends Model
{
    use HasFactory;

    // relationship with investors and applicants
    public function Investor() {
        return $this->hasMany(investor::class, 'user_id');
    }

    public function Applicant() {
        return $this->hasMany(applicant::class, 'user_id');
    }

}
