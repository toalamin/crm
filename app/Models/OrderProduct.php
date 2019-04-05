<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model {

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];
    public $timestamps = false;

    public function product() {
        return $this->belongsTo(Product::class);
    }

}
