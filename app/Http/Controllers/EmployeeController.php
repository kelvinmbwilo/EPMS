<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Name: <input type=text>";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee = new Employee();
        $employee->first_name                       = $request->input('first_name');
        $employee->middle_name                      = ($request->has('middle_name'))?$request->input('middle_name'):"";
        $employee->last_name                        = $request->input('last_name');
        $employee->pension_fund_id                  = $request->input('pension_fund_id');
        $employee->pension_identification_number    = ($request->has('pension_identification_number'))?$request->input('pension_identification_number'):"";
        $employee->gender                           = $request->input('gender');
        $employee->date_of_birth                    = $request->input('date_of_birth');
        $employee->salary                           = $request->input('salary');
        $employee->employee_type                    = $request->input('employee_type');
        $employee->date_of_retirement               = $request->input('date_of_retirement');
        $employee->email                            = ($request->has('email'))?$request->input('email'):"";
        $employee->phone_number                     = ($request->has('phone_number'))?$request->input('phone_number'):"";
        $employee->institution_id                   = $request->input('institution_id');

        $employee->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::find($id)->load('institution','pension');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $employee = Employee::find($id);
        $employee->first_name                       = $request->input('first_name');
        $employee->middle_name                      = ($request->has('middle_name'))?$request->input('middle_name'):"";
        $employee->last_name                        = $request->input('last_name');
        $employee->pension_fund_id                  = $request->input('pension_fund_id');
        $employee->pension_identification_number    = ($request->has('pension_identification_number'))?$request->input('pension_identification_number'):"";
        $employee->gender                           = $request->input('gender');
        $employee->date_of_birth                    = $request->input('date_of_birth');
        $employee->salary                           = $request->input('salary');
        $employee->employee_type                    = $request->input('employee_type');
        $employee->date_of_retirement               = $request->input('date_of_retirement');
        $employee->email                            = ($request->has('email'))?$request->input('email'):"";
        $employee->phone_number                     = ($request->has('phone_number'))?$request->input('phone_number'):"";
        $employee->institution_id                   = $request->input('institution_id');

        $employee->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
    }
}
