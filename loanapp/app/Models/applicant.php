<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    use HasFactory;

    // relationship with users defined

    public function Users() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    // relationship with contract defined

    public function Contract() {
        return $this->hasMany(contract::class, 'applicant_id');
    } 
}
