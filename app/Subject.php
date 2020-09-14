<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    'name', 'course_id'
  ];

  public function courses($value='')
  {
  	return $this->belongsTo('App\Course');
  }

}
