<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CountryModel;
use DB;

class Countrycontroller extends Controller
{
 	public function country(){
 		 return response()->json(CountryModel::get(),200);
 		// return DB::table('_z_country')->get();
 	}
 	public function getid($id){
 		return response()->json(CountryModel::find($id),200);
 	}
 	public function insert(Request $request){
 		$country=CountryModel::create($request->all());
 		return response()->json($country,201);
 	}
 	public function insertrec(Request $request,$country){    
		$user = CountryModel::find($country);
		$user->update($request->all());
		$user = CountryModel::find($country);
		return response()->json($user); 		 
 	}
 	public function deleterec(Request $request,$deletecode){
 		$res=CountryModel::where('id',$deletecode)->delete();
 		return response()->json($res,401);
 	}
}
