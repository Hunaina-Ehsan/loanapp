<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class proposal extends Model
{
    use HasFactory;

    // relationship with applicant
    public function Applicant() {
        return $this->belongsTo(applicant::class, 'user_id',);
    }
}
