<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['cname','total_seats','available_seats','allocated_seats'];
}
