<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Space extends Model
{
  public function prettyUpdate() {
    $dt = new Carbon($this->created_at);
      if ($dt->isToday()) {
          return $dt->format('g:i a');
        }
    return $dt->format('n/j/y \\a\\t g:i a');
  }

  public function lastUpdate() {
    $dt = new Carbon($this->created_at);
      return $dt->diffForHumans();
    }

  public function users() {
    return $this->belongsToMany('App\User');
  }

  public function posts() {
    return $this->belongsToMany('App\user_post', 'space_post', 'space_id', 'post_id');
  }

}
