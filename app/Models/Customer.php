<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    /*
      The attributes that are not mass assignable.
     *    */

    protected $guarded = ['remember_token'];
    /*
      The attributes that should be hidden for arrays.
     * 
     *      */
    protected $hidden = ['password', 'remember_token'];
    /*
      The attributes that should be cast to native types.
     *     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active' => 'bool',
    ];

    //get user info
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function meetings() {
        return $this->hasMany(Meeting::class);
    }

}
