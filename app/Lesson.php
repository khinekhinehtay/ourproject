<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
    'video', 'description', 'minutes', 'subject_id'
  ];

  public function subject($value='')
  {
  	return $this->belongsTo('App\Subject');
  }

}
