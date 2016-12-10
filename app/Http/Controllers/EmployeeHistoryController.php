<?php

namespace App\Http\Controllers;

use App\EmployeeHistory;
use Illuminate\Http\Request;

class EmployeeHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmployeeHistory::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Item = new EmployeeHistory();

        $Item->date_of_action                  = ($request->has('date_of_action'))?$request->input('date_of_action'):"";
        $Item->new_salary                      = ($request->has('new_salary'))?$request->input('new_salary'):"";
        $Item->old_salary                      = ($request->has('old_salary'))?$request->input('old_salary'):"";
        $Item->new_retirement_date             = ($request->has('new_retirement_date'))?$request->input('new_retirement_date'):"";
        $Item->old_retirement_date             = ($request->has('old_retirement_date'))?$request->input('old_retirement_date'):"";
        $Item->employee_id                     = ($request->has('employee_id'))?$request->input('employee_id'):"";


        $Item->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return EmployeeHistory::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Item = EmployeeHistory::find($id);

        $Item->date_of_action                  = ($request->has('date_of_action'))?$request->input('date_of_action'):"";
        $Item->new_salary                      = ($request->has('new_salary'))?$request->input('new_salary'):"";
        $Item->old_salary                      = ($request->has('old_salary'))?$request->input('old_salary'):"";
        $Item->new_retirement_date             = ($request->has('new_retirement_date'))?$request->input('new_retirement_date'):"";
        $Item->old_retirement_date             = ($request->has('old_retirement_date'))?$request->input('old_retirement_date'):"";
        $Item->employee_id                     = ($request->has('employee_id'))?$request->input('employee_id'):"";


        $Item->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Item  = EmployeeHistoryController::find($id);
        $Item->delete();

    }
}
