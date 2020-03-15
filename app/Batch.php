<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
	protected $fillable = ['total_seats','remaining_seats','batch_time','courseid'];
}
