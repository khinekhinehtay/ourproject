<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Lesson;

class Subject extends Model
{
    protected $fillable = [
    'name','course_id',
  ];
  public function course($value='')
  {
  	return $this->belongsTo('App\Course');
  }

  public function lessons($value='')
  {
  	return $this->hasMany('App\Lesson');
  }


}
