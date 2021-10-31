<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;


class AboutController extends Controller
{
    public function add(){
    	return view('add');
    }

    public function all(){
    	$data = Employee::all(); //select * from employees
    	return view('list',['employees'=>$data]);
    }
    public function store(Request $request){
    	$obj = new Employee();
    	$obj->name = $request->name;
        $obj->email = $request->email;
    	$obj->birth_date = $request->birth_date;
    	$obj->salary = $request->salary;
    	// $obj->status = 1; 
    	if ($obj->save()) {
    		return redirect()->to('/list');
    	}
    	
    }

    public function edit($id){
    	$employee = Employee::find($id);/////select * from empoloyee where id = $id
    	return view('edit',['employee'=>$employee]);
    }


    public function update(Request $req, $id){
    	$obj = Employee::find($id);
    	$obj->name = $req->name;
    	$obj->email = $req->email;
    	$obj->birth_date = $req->birth_date;
    	$obj->salary = $req->salary;
    	$obj->name = $req->name;
    	if ($obj->save()) {
    		return redirect()->to('/list');
    	}
    }

    public function delete($id){
    	$obj = Employee::find($id);
    	if ($obj->delete()) {
    		return redirect()->to('/list');
    	}
    }

}
