<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CountryModel;

class Countrycontroller extends Controller
{
 	public function country(){
 		return response()->json(CountryModel::get(),200);
 	}
}
