<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videojoc extends Model
{
    protected $fillable = [
      'nom','empresa','autor','data_llancament','tipus',
    ];
}
