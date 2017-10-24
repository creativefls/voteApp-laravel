<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasWorkshop extends Model
{
    protected $table = 'kelas_workshop';

    
    public function pesertaWorkshop()
    {
      return $this->hasMany('App\User', 'foreign_key');
    }
}
