<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
  protected $table = 'sounds';

  public function sets() {
    return $this->belongsToMany('App\Set');
  }


}
