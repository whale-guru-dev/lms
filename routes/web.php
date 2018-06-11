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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/Home', 'HomeController@index')->name('Home');


Route::group(['prefix'=>'Center'],function(){

	Route::get('/', 'CenterController@index');

	Route::get('/MasterFrances/{mf_id}','CenterController@masterfrances');

	Route::get('/MasterFrances/{mf_id}/LicenseHolder/{lh_id}','CenterController@licenseholder');

	Route::get('/{id}', 'CenterController@center');

	Route::get('/{id}/{subpage}' , 'CenterController@subpage');

	Route::get('/{id}/{subpage}/Edit','CenterController@editsubpageview');

	Route::post('/{id}/{subpage}/Edit','CenterController@editsubpage');

	Route::post('/NewCenter','CenterController@newcenter');


});

Route::group(['prefix'=>'Student'],function(){
	Route::get('/', 'StudentController@index');
	Route::get('/{centername}','StudentController@std_on_center');
	Route::get('/{id}/Summary', 'StudentController@summary');
	Route::get('/{id}/Class','StudentController@classes');
	Route::get('/{id}/Enrollment','StudentController@enrolment');

	Route::post('/{id}/NewStudent','StudentController@newstudent');
	Route::post('/NewBillingaccount', 'StudentController@newbillingaccount');

	Route::post('/{id}/EditStudent','StudentController@editstudent');
	Route::post('/{id}/PropicChange','StudentController@changepropic');
	Route::post('/{id}/NewParent','StudentController@newparent');
	Route::post('/{id}/AddParent','StudentController@addparent');
	Route::post('/{id}/AddSibling','StudentController@addsibling');
});

Route::group(['prefix'=>'Search'],function(){

	Route::post('/Student/{Searchcase}','SearchController@StudentSearch');

});