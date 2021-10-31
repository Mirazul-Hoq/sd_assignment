<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tableadd(){
		return view('tableadd');
    }

    public function tableall(){
    	$data = Table::all();         // select * from tables
    	return view('tablelist',['tables'=>$data]);
    }
    public function tablestore(Request $req){
    	$obj = new Table();
    	$obj->name = $req->name;
    	$obj->email = $req->email;
    	$obj->address = $req->address;
    	$obj->birth_date = $req->birth_date;
    	$obj->salary = $req->salary;
    	if ($obj->save()) {
    		return redirect()->to('/tablelist');
    	}

    }
}
