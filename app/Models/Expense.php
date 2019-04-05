<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //not column protechted for save
    protected $guarded = [''];
    //default timestamps remove
    public $timestamps = false;
//date formate
    protected $dates = ['created_at'];
    
    
    
    
    
}
