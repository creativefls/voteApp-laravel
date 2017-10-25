<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaktuBuka extends Model
{
    protected $table      = 'waktu_buka';
    // yang bisa diubah
    protected $fillable   = ['is_buka', 'kode_fitur', 'deskripsi'];
}
