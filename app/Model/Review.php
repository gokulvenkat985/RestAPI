<?php

namespace App\Model;

use App\Model\product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	public function product()
	{
		return $this->belongsTo(product::class);
	}
}
