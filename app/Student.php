<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	public function course() {
		return $this->belongsTo(Course::class);
	}

	public function address() {
		return $this->belongsTo(Address::class);
	}
}
