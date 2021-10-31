<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('add', 'AboutController@add');
Route::get('list', 'AboutController@all');
Route::post('store','AboutController@store');

///edit related route

Route::get('edit/{id}','AboutController@edit');
Route::post('update/{id}','AboutController@update');
Route::get('delete/{id}','AboutController@delete');

///login related route

Route::get('login','LoginController@login');
Route::get('loginstore','LoginController@loginstore');

Route::get('contact-us','ContactusController@contact');

Route::get('table','TableController@tableadd');
Route::post('tablestore','TableController@tablestore');
Route::get('tablelist','TableController@tableall');

Route::get('proadd/{id}/{name}/{email}',function($i, $n, $e){
	return view('proadd',['sid'=>$i, 'sname'=>$n, 'semail'=>$e]);
});

Route::get('stuadd','StuaddController@stuadd');
// Route::post('store','StuaddController@store');
Route::get('studentlist','StuaddController@all');
Route::get('stuedit/{id}','StuaddController@edit');
Route::post('stuupdate/{id}','StuaddController@stuupdate');
Route::get('studelete/{id}','StuaddController@studelete');


Route::get('login','StuaddController@login');
Route::post('loginstore','StuaddController@loginstore');

Route::get('product-list','ProlistController@all');


// middleware related route group

Route::group(['middleware' => 'checkloggedin'],function(){

	Route::get('/', function () {
    	return view('welcome');
	});

});

Route::group(['middleware' => 'checkifadmin'],function(){
	Route::get('teacher-add','StuaddController@teacher');
	Route::post('teacher-store','StuaddController@teacher_store');
	Route::get('admin','StuaddController@admin');
});

Route::group(['middleware' => 'checkifstudent'],function(){
	Route::get('view-ct-marks','StuaddController@alldata');
	Route::get('stlist','StuaddController@stdall');
	Route::get('stedit/{id}','StuaddController@stedit');
	Route::post('stupdate/{id}','StuaddController@stupdate');
	Route::get('contact','StuaddController@contact');
	Route::get('pdf-list/{id}','StuaddController@pdf');
	Route::get('/pdf-list-download/{id}','StuaddController@pdf_list_download');
});

Route::group(['middleware' => 'checkifteacher'],function(){
	Route::get('create-ct','StuaddController@create_ct');
	Route::get('enter-ct-marks','StuaddController@enter_ct_marks');
});
		// End of middleware related route group


/// image upload related route

Route::get('image','UploadController@viewpage');
Route::post('uploadimage','UploadController@store');

//pdf related route

Route::get('disneyplus', 'DisneyplusController@create')->name('disneyplus.create');
Route::post('disneyplus', 'DisneyplusController@store')->name('disneyplus.store');
Route::get('disneyplus/listing', 'DisneyplusController@index')->name('disneyplus.index');
Route::get('/downloadPDF/{id}','DisneyplusController@downloadPDF');

//pdf
//Route::get('pdlist','PdfController@plist')->name('pl');

//excel related route

Route::get('excel','ExcelController@excel_view');
Route::post('import', 'ExcelController@import')->name('import');

Route::get('excel-export','ExcelController@excel_exp')->name('excel.create');
Route::post('exceldisney', 'ExcelController@excel_sto')->name('excel.store');

Route::get('export', 'ExcelController@export');

