<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    'name', 'photo','description'
  ];

  public function enrollments()
  {
      return $this->hasMany('App\Enrollments');
  }
  
  public function tutor($value='')
  {
  	return $this->belongsTo('App\Tutor');
  }

  public function subjects($value='')
  {
  	return $this->hasMany('App\Subject');
  }

}
