<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadMeeting extends Model
{
    protected $guarded=[''];
    
    
     public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
