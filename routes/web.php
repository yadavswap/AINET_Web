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

//  Auth::routes();

// Route::get('/login/individual', 'Auth\LoginController@showIndividualLoginForm');
// Route::get('/login/institution', 'Auth\LoginController@showInstitutionLoginForm');
// // // Route::get('/register/individual', 'Auth\RegisterController@showIndividualRegisterForm');
// // Route::get('/register/institution', 'Auth\RegisterController@showInstitutionRegisterForm');

// Route::post('/indlogin', 'Auth\LoginController@individualLogin')->name('indlogin.post');
// Route::post('/login/institution', 'Auth\LoginController@institutionLogin');
// // Route::post('/register/individual', 'Auth\RegisterController@createIndividual');
// // Route::post('/register/institution', 'Auth\RegisterController@createInstitution');

// Route::view('/home', 'home')->middleware('auth');
// Route::view('/individual', 'individual');
// Route::view('/institution', 'institution');
Route::get('/', function () {
    return view('index');
})->name('home.index');
Route::get('/memb_type1', function () {
    return view('memb_type1');
});
Route::get('/memb_type2', function () {
    return view('memb_type2');
});
Route::get('/memb_type3', function () {
    return view('memb_type3');
});
Route::get('/memb_type4', function () {
    return view('memb_type4');
});
Route::get('/open20', function () {
    return view('open20');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/connect', function(){
    return view('connect');
});



Route::get('/about', function () {
    return view('about2');
});

// Route::get('user/logout','Auth\LoginController@userLogout');
// Route::get('/login','LoginController@index');


//register page
Route::get('/register', function(){
    return view('auth.register');
});
Route::get('/telegram', function(){
    return view('telegram');
});
Route::get('/news', function(){
    return view('news');
});
Route::get('/membership', function(){
    return view('register_one');
});

Route::get('/newann', function () {
    return view('newann');
});
Route::get('/tr', function () {
    return view('tr');
});
Route::get('/prelim', function () {
    return view('pri');
});
Route::get('/tr3', function () {
    return view('tr3');
});

Route::get('/tr2', function () {
    return view('tr2');
});
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/newblog', 'BlogController@index');
Route::get('/newblog-single', 'BlogController@index');
Route::get('show/coursecontent/{id}', 'BlogController@CourseContentPage');



Route::get('/newpublicationone', function () {
    return view('newpublicationone');
});
Route::get('/newconf', function () {
    return view('newconf');
});
Route::get('/newcontact', function () {
    return view('newcontact');
});
// Route::get('/newblog-single', function () {
//     return view('newblog-single');
// });

Route::get('/newabout', function () {
    return view('newabout');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/faq', function(){
    return view('about');
});

// Route::get('/logout', function(){
//     return view('logout');
// });

Route::get('/about1', function(){
    return view('about1');
});
Route::get('/announcementone', function(){
    return view('announcementone');
});


Route::get('/announcementtwo', function(){
    return view('announcementtwo');
});

Route::post('/announcementtwo','InterestController@store');
// Route::post('/login/custom','Auth\LoginController@login');


Route::get('/publicationone', function(){
    return view('publicationone');
});

Route::get('/publicationtwo', function(){
    return view('publicationtwo');
});

Route::get('/resources', function(){
    return view('resources');
});

Route::get('/conference', function(){
    return view('conference');
});
Route::get('/main', function(){
    return view('main');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/ainet2020ppf', function() {
    return view('ainet2020ppf');
});
Route::get('/ann', function() {
    return view('ann');
});
Route::post('/ainet2020ppf','InterestController@storePpfs');

Route::get('/ainet2020drf', function() {
    return view('ainet2020drf');
});
Route::get('/new_about', function() {
    return view('new_about');
});
Route::get('/tri', function() {
    return view('ainet_in1');
});
Route::get('/tri', function() {
    return view('ainet_in1');
});
Route::get('/ainet_in', function() {
    return view('ainet_in2');
});

Route::post('/ainet2020drf','InterestController@storeDrfs');






Route::post('store_form','RegisterController@storeform')->name('form.store');

Route::post('/login','Auth\LoginController@userlogin')->name('form.login');

Route::get('print/form', function(){
    
    $inst = "";
    $indi = "";

    if(session('type') === "over_inst"){
        $inst = \App\OverInstitution::find(session('id'));
    }else if(session('type') === "inst"){
        $inst = \App\Institution::find(session('id'));
    }else if(session('type') === "indi"){
        $indi = \App\Individual::find(session('id'));
    }else if(session('type') === "over_indi"){
        $indi = \App\OverIndividual::find(session('id'));
    }

    return view('print', compact('inst','indi'));
});

Route::get('/pay', function(){
    
    $inst = "";
    $indi = "";

    if(session('type') === "over_inst"){
        return view ('memb_type4');
        // $inst = \App\OverInstitution::find(session('id'));
    }else if(session('type') === "inst"){
        // $inst = \App\Institution::find(session('id'));
        return view ('memb_type2');

    }else if(session('type') === "indi"){
        // $indi = \App\Individual::find(session('id'));
        return view ('memb_type1');

    }else if(session('type') === "over_indi"){
        // $indi = \App\OverIndividual::find(session('id'));
        return view ('memb_type3');

    }

    // return view('print', compact('inst','indi'));
});
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/membership', 'LettersController@store');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('userupdate/{id}','UserController@edit')->name('user.index');
Route::post('userupdate/{id}/update','UserController@update')->name('user.update');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
