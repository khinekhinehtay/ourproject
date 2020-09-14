<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    'name','course_id',
  ];
  public function courses($value='')
  {
  	return $this->belongsTo('App\Course');
  }
<<<<<<< HEAD
=======

  public function lessons($value='')
  {
  	return $this->hasMany('App\Lesson');
  }

>>>>>>> fdf75c9c38e99aaf2fe411665dfbaf6720ef19ae
}
