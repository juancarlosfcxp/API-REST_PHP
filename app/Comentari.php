<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    protected $fillable = [
      'autor','data','videojoc_id','text',
    ];
}
