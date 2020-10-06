<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Television extends Model
{
  protected $fillable = [
    'name',
    'model',
    'brand',
    'description',
    'price'
  ];
}
