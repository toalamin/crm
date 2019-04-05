<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model {

    //f
    protected $guarded = [''];

    //get meeting 
    public function meeting() {
        return $this->belongsTo(Meeting::class);
    }

//get all leadmeetings
    public function meetings() {
        return $this->hasMany(LeadMeeting::class);
    }

}
