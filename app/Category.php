<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * Subject of the method.
   *
   * @return void
   */
  public function scopeVisible($query) {
    return $query->where('web_visible', 1)->get();
  }
}
