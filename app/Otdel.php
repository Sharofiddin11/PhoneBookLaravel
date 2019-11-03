<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otdel extends Model
{
    protected $fillable = ['name', 'department_id'];

    public function otdel_peoples() {

    	return $this->hasMany(People::class);
    
    }
}
