<?php

namespace App\Http\Controllers;

use App\Payments;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Payments::all();

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

        $Item = new Payments();

        $Item->employee_id                         = $request->input('employee_id');
        $Item->pension_fund_id                     = $request->input('pension_fund_id');
        $Item->amount                              = $request->input('amount');
        $Item->internal_receipt_number             = $request->input('internal_receipt_number');
        $Item->pension_receipt_number              = $request->input('pension_receipt_number');
        $Item->pension_payment_date                = $request->input('internal_payment_date');

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
        return Payments::find($id);
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

        $Item =Payments::find($id);

        $Item->employee_id                         = $request->input('employee_id');
        $Item->pension_fund_id                     = $request->input('pension_fund_id');
        $Item->amount                              = $request->input('amount');
        $Item->internal_receipt_number             = $request->input('internal_receipt_number');
        $Item->pension_receipt_number              = $request->input('pension_receipt_number');
        $Item->pension_payment_date                = $request->input('internal_payment_date');

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
        $Item =Payments::find($id);
        $Item->delete();
    }
}
