<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prolist;
use App\Category;
use DB; //query builder

class ProlistController extends Controller
{
    public function all(Request $request){
    	$data = DB::table('prolists as p')
    			  ->join('categories as c', 'c.id','p.category_id')
    			  ->select('p.id','p.title','c.name as catname')
    			  ->get();
    	return view('prolist',['product'=>$data]);
    	}
}
