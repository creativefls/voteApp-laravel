<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // *****************************************************
    // ** Standard checking
    // *****************************************************

    // apakah rangers ?
    public function isRangers()
    {
      $role = $this->role;
        if ($role == 'rangers') {
          return true;
        }
        return false;
    }

    // apakah delegates ?
    public function isDelegates()
    {
      $role = $this->role;
        if ($role == 'delegates') {
          return true;
        }
        return false;
    }

    // dapatkah vote?
    public function isCanVote()
    {
      $role = $this->role;
        if ($role == 'delegates') {
          return true;
        }
        return false;
    }

}
