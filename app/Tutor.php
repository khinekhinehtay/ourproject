<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Tutor extends Model
{
    protected $fillable = [
    'name', 'photo','email','gender','dob','course_id','address'
  ];

  public function courses($value='')
  {
  	return $this->hasMany('App\Course');
  }
  
}
