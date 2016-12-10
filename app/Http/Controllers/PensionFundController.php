<?php

namespace App\Http\Controllers;

use App\Payments;
use App\PensionFund;
use Illuminate\Http\Request;

class PensionFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PensionFund::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Item= new PensionFund();

        $Item->name                      = $request->input('name');
        $Item->contact                   = $request->input('contact');
        $Item->address                   = $request->input('address');

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
        return PensionFund::find($id);

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
        $Item = PensionFund::find($id);

        $Item->name                      = $request->input('name');
        $Item->contact                   = $request->input('contact');
        $Item->address                   = $request->input('address');

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
        $Item = PensionFund::find($id);
        $Item->delete();
;    }

      /**
     * List employee for this pension fund
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function employees($id)
    {
        return PensionFund::find($id)->employees()->count();
   }
}
