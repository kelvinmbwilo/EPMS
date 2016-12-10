<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Employee Routes
 *
 * */
// list all employee
Route::get('employee', 'EmployeeController@index');
//get details of employee using id
Route::get('employee/{id}', 'EmployeeController@show');
//update employee using id
Route::post('employee/{id}', 'EmployeeController@update');
// create new employee
Route::post('employee', 'EmployeeController@store');
//delete employee
Route::post('delete/employee/{id}', 'EmployeeController@destroy');

/**
 *  Employee History Routes
 *
 * */
// list all employeehistory
Route::get('employeehistory', 'EmployeeHistoryController@index');
//get details of employee using id
Route::get('employeehistory/{id}', 'EmployeeHistoryController@show');
//update employee using id
Route::post('employeehistory/{id}', 'EmployeeHistoryController@update');
// create new employee
Route::post('employeehistory', 'EmployeeHistoryController@store');
//delete employee
Route::post('delete/employeehistory/{id}', 'EmployeeHistoryController@destroy');

/**
 * Institutions Routes
 *
 * */
// list all institutions
Route::get('institution', 'institutionController@index');
//get details of employee using id
Route::get('institution/{id}', 'institutionController@show');
//update employee using id
Route::post('institution/{id}', 'institutionController@update');
// create new employee
Route::post('institution', 'InstitutionController@store');
//delete employee
Route::post('delete/institution/{id}', 'InstitutionController@destroy');

/**
 * Payments Routes
 *
 * */
// list all payments
Route::get('payments', 'PaymentsController@index');
//get details of payments using id
Route::get('payments/{id}', 'PaymentsController@show');
//update payment using id
Route::post('payments/{id}', 'PaymentsController@update');
// create new payments
Route::post('payments', 'PaymentsController@store');
//delete payments
Route::post('delete/payments/{id}', 'PaymentsController@destroy');




/**
 * Pension  Routes
 *
 * */
// list all Pension
Route::get('pensionfunds', 'PensionFundController@index');
//get details of Pension using id
Route::get('pensionfunds/{id}', 'PensionFundController@show');
//update Pensionusing id
Route::post('pensionfunds/{id}', 'PensionFundController@update');
// create new Pension
Route::post('pensionfunds', 'PensionFundController@store');
//delete payments
Route::post('delete/pensionfunds/{id}', 'PensionFundController@destroy');
// list all employees for this pension
Route::get('pensionfunds/{id}/employees', 'PensionFundController@employees');




/**
 * Systemsetting  Routes
 *
 * */
// list all Pension
Route::get('systemsetting', 'SystemSettingsController@index');
//get details of Pension using id
Route::get('systemsetting/{id}', 'SystemSettingsController@show');
//update Pensionusing id
Route::post('systemsetting{id}', 'SystemSettingsController@update');
// create new Pension
Route::post('systemsetting', 'SystemSettingsController@store');
//delete payments
Route::post('delete/systemsetting/{id}', 'SystemSettingsController@destroy');





/**
 * User roles  Routes
 *
 * */
// list all Userroles
Route::get('userroles', 'UserRolesController@index');
//get details of userroles id
Route::get('userroles/{id}', 'UserRolesController@show');
//update Pensionusing id
Route::post('userroles/{id}', 'UserRolesController@update');
// create new userroles
Route::post('userroles', 'UserRolesController@store');
//delete userroles
Route::post('delete/userroles/{id}', 'UserRolesController@destroy');




/**
 * Users  Routes
 *
 * */
// list all  Users
Route::get('users', 'UserController@index');
//get details of  Users using id
Route::get('users/{id}', 'UserController@show');
//update  Users using id
Route::post('users/{id}', 'UserController@update');
// create new  Users
Route::post('users', 'UserController@store');
//delete   Users
Route::post('delete/users/{id}', 'UserController@destroy');
