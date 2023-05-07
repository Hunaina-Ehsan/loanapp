<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;

    public function Proposals() {
        return $this->belongsTo(proposal::class, 'proposal_id',);
    }

    public function Applicant() {
        return $this->belongsTo(applicant::class, 'applicant_id',);
    }

    public function Investor() {
        return $this->belongsTo(investor::class, 'investor_id',);
    }
}
