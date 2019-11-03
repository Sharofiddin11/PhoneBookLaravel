<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
  protected $fillable = ['name', 'phone_number', 'email', 'address', 'department_id', 'otdel_id'];
}
