<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class BasvurTipi extends Model
{
    use HasFactory;

    protected $table="basvurutipleri";
    protected $fillable=[
      'tip',
      'basvuru_id',
    ];
}
