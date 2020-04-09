<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CountryModel;
use DB;
use Illuminate\Support\Facades\Validator;


class Countrycontroller extends Controller
{
 	public function country(){
 		 return response()->json(CountryModel::get(),200);
 		// return DB::table('_z_country')->get();
 	}
 	public function getid($id){
 		$check=CountryModel::find($id);
 		if(is_null($check)){
 		return response()->json(["message"=>"Record not found"],404); 		}
 		else{
 			return response()->json(CountryModel::find($id),200);
 		}
 		
 	}
 	public function insert(Request $request){
 		$rules=[
 			'name'=>'required',
 			'iso'=>'required'
 		];
 		$validator=validator::make($request->all(),$rules);		
if($validator->fails())
{
 	return response()->json($validator->errors(),400);
}
else{
	$country=CountryModel::create($request->all());
	return response()->json($country,201);	
}
 		
 	}
 	public function insertrec(Request $request,$country){
		$user = CountryModel::find($country);
		if(is_null($user)){
		return response()->json(["message"=>"Record not found"],404);
		}
		else{
		$user->update($request->all());
		$user = CountryModel::find($country);
		return response()->json($user);
		}
		 		 
 	}
 	public function deleterec(Request $request,$deletecode){
 		$check=CountryModel::find($deletecode);
 		if($check){
 			
 		$res=CountryModel::where('id',$deletecode)->delete();
 		return response()->json($res,401);	
 		}
 		else{
 		return response()->json(["message"=>"Record not found"],404);
 		}
 		
 	}
}
