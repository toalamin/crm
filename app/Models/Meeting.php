<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model {

    public function sales_person() {
        return $this->belongsTo(User::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function lead() {
        return $this->hasOne(Lead::class);
    }

}
