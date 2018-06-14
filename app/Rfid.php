<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfid extends Model
{
  //fillable fields
  protected $fillable = ['uid', 'make', 'model'];

  //custom time stamps
  const CREATED_AT = 'created';
  const UPDATED_AT = 'modified';
}
