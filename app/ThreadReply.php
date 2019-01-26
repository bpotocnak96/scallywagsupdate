<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadReply extends Model
{

	protected $guarded = [];

    public function user() {
		return $this->belongsTo(User::class);
	}

	public function thread() {
		return $this->belongsTo(Thread::class);
	}
}