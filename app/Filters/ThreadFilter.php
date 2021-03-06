<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\Filter;
use App\Thread;
use App\User;

class ThreadFilter extends Filter {

	protected $filters = ['u','popular','unanswered'];

	public function u($user_id) {
		return $this->builder->where('user_id',$user_id);
	}

	public function popular() {
		$this->builder->orderBy('replies_count','desc');
	}

	public function unanswered() {
		$this->builder->doesntHave('replies');
	}

}
