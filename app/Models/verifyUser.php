<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifyUser extends Model
{
    use HasFactory;

    public function verifyUser()
    {
      return $this->hasOne('App\VerifyUser');
    }

    protected $guarded = [];
 
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
