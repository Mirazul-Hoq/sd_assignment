<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceldisney;
use Excel;
use App\Imports\ExcelsImport;
use App\Exports\ExcelExport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use DB;


class ExcelController extends Controller
{
    public function excel_view(){
    	$new = Exceldisney::all();
    	return view('import_exc',['data' => $new]);
    }

    public function import(Request $request) 
    {
    	Excel::import(new ExcelsImport,request()->file('file'));
           
        return redirect('excel')->with('success', 'Excel is successfully imported');
    }



    public function excel_exp(){
    	return view('excel_export');
    }
    public function excel_sto(Request $request){
    	$obj = new Exceldisney();
    	$obj->name = $request->name;
    	$obj->email = $request->email;
    	$obj->birth_date = $request->birth_date;
    	$obj->country = $request->country;
    	$obj->city = $request->city;
    	if ($obj->save()) {
   			return redirect('/excel')->with('success', 'Excel is successfully saved');
    	}
    }
    public function export() 
	{
	    return Excel::download(new ExcelExport, 'excelexp.xlsx');
	}
}
