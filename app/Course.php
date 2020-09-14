<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    'name', 'description'
  ];

  public function tutors($value='')
  {
  	return $this->belongsTo('App\Tutor');
  }

  public function subjects($value='')
  {
  	return $this->hasMany('App\Subject');
  }

}
