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
        'name', 'email', 'password','komunitas_id','kelas_id','makan_id'
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

    // menghitung jumlah pemilih makan
    public function sumMakanan($id)
    {
      return $this->where('makan_id', $id)->count();
    }

    public function totalPemilihMakan()
    {
      return $this->whereNotNull('makan_id')->count();
    }

    // menghitung jumlah
    public function sumKelas($id)
    {
      return $this->where('kelas_id', $id)->count();
    }

    public function totalPemilihKelas()
    {
      return $this->whereNotNull('kelas_id')->count();
    }

    // menghitung jumlah komunitas
    public function sumKomunitas($id)
    {
      return $this->where('komunitas_id', $id)->count();
    }

    public function totalPemilihKomunitas()
    {
      return $this->whereNotNull('komunitas_id')->count();
    }
}
