<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Ders extends Model
{
    use HasFactory;
    protected $table='ders';
    protected $fillable=[
      'ders',
      'T',
      'L',
      'U',
      'KR',
      'AKTS',
      'bolum'
    ];
}
