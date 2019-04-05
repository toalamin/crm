<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseHead extends Model {

//no column guarded
    protected $guarded = [''];
    //no detault timestamps
    public $timestamps = false;

}
