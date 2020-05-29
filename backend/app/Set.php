<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $table = 'sets';

    public function sounds() {
      return $this->belongsToMany('App\Sound')->withPivot('volume');
    }
}
