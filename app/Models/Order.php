<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $guarded = [''];

    public function lead() {
        return $this->belongsTo(Lead::class);
    }

    public function products() {
        return $this->hasMany(OrderProduct::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

}
