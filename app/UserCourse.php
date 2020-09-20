<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $fillable = ['user_id', 'course_id', 'course_enrolled', 'course_completed'];

    protected $table = "user_courses";

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
