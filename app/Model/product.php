<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function review()
    {
    	return $this->hasMany(Review::class,'id');
    	// return $this->hasMany(Chapter::class, 'module_id');
    }
}
