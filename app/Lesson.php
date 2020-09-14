<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
    'video', 'description','subject_id'
  ];

  public function sujects($value='')
  {
  	return $this->hasMany('App\Subject');
  }

}
