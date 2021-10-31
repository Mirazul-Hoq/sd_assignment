<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuadd;
use App\Student;
use App\Ctmark;
use Illuminate\Support\Facades\Session;
use PDF;
class StuaddController extends Controller
{
    public function stuadd(){
    	return view('stuadd');
    }
    public function all(){
    	$data = Stuadd::all();
    	return view('studentlist',['stulist'=>$data]);
    }
    public function store(Request $request){
    	$obj = new Stuadd();
    	$obj->name = $request->name;
    	$obj->email = $request->email;
    	$obj->address = $request->address;
    	$obj->birth_date = $request->birth_date;
    	$obj->semester_fee = $request->semester_fee;
    	if ($obj->save()) {
    		return redirect()->to('/studentlist');
    	}
	}

	public function edit($id){
		$data = Stuadd::find($id);
		return view('stuedit',['studentedit'=>$data]);
	}

	public function stuupdate(Request $req, $id){
		$obj = Stuadd::find($id);
		$obj->name = $req->name;
		$obj->email = $req->email;
		$obj->address = $req->address;
		$obj->birth_date = $req->birth_date;
		$obj->semester_fee = $req->semester_fee;
		if ($obj->save()) {
    		return redirect()->to('/studentlist');
    	}
	}

	public function studelete($id){
		$data = Stuadd::find($id);
		if ($data->delete()) {
			return redirect()->to('/studentlist');
		}
	}
	public function login(){
		return view('login');
	}

	public function loginstore(Request $req){
		
		$email = $req->email;
		$password = $req->password;
		$obj = Student:: where('email','=',$email)
					  -> where('password','=',$password)
					  -> first();
		if ($obj) {
			$req->session()->put('userid',$obj->id);
			$req->session()->put('username',$obj->name);
			$req->session()->put('userrole',$obj->role);
			return redirect()->to('/');		
		}
		else{
			echo "Invalid Email or Password";
		}
	}

	public function view_ct_marks(){
		return view('student/view_ct_marks');
	}
	public function alldata(){
    	$data = Ctmark::all();
    	return view('student/pages/view_ct_marks',['ctmarkvar'=>$data]);
    }
	public function contact(){
		return view('student/pages/contact');
	}
	// public function stedit(){
	// 	return view('student/pages/stedit');
	// }

	public function create_ct(){
		return view('teacher.create_ct');
	}
	public function enter_ct_marks(){
		return view('teacher.enter_ct_marks');
	}
	public function admin(){
		return view('admin.admin');
	}
	public function teacher(){
		return view('admin.teacher');
	}

	public function teacher_store( Request $request ){
		// dd($request);
		$validatedData = $request->validate([
	        'name' => 'required|regex:/^[\pL\s]+$/u',
	        'email' => 'required|email|unique:teachers,email',
	        'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
	        'birth_date' => 'required|date',
	        'salary' => 'required|integer',
	    ]);
	}

	public function stdall(){
		$data = Student::all()->where('role','=','student');
		return view('student.pages.student_list',['student' => $data]);
	}

	public function stedit($id){
		$obj = Student::find($id);
		return view('student.pages.stedit',['stedit' => $obj]);
	}

	public function stupdate(Request $req, $id){
		$obj = Student::find($id);
		$obj->name = $req->name;
		$obj->country = $req->country;
		$obj->city = $req->city;
		if( $obj->save() ){
			return redirect()->to('student.pages.student_list');
		}
	}

	public function pdf($id){
		$data = Student::find($id);
		return view('student.pages.pdf_list',['pdf' => $data]);
	}

	public function pdf_list_download($id) {
		$list_pdf = Student::find($id);
        $down = PDF::loadView('student.pages.pdf_down_list', compact('list_pdf'));
        return $down->download('pdf_down_list.pdf');
	}
	
}
