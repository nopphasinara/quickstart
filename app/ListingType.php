<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingType extends Model
{
    protected $fillable = [
      'name',
      'slug',
      'description',
    ];
}
