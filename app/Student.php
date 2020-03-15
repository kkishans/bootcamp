<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['fname','lname','course','sem','address','phone','email','bid','join'];
}
