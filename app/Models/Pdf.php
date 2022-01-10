<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//Dikkat
use Jenssegers\Mongodb\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    protected $table="pdf";
    protected $fillable=[
      'email',
      'pdf_url',
      'onay',
      'tip'
    ];
}
