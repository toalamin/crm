<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model {

    //not column protechted for save
    protected $guarded = [''];
    //default timestamps remove
    public $timestamps = false;
//date formate
    protected $dates = ['created_at'];

    public function head() {
        $this->belongsTo(ExpenseHead::class);
    }

    public function sale_person() {

        $this->belongsTo(User::class);
    }

}
