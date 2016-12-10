<?php

namespace App\Http\Controllers;

use App\Institutions;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Institutions::all();
        //
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
        $Item = new Institutions();
        $Item->name                       = $request->input('name');
        $Item->region                     = ($request->has('region'))?$request->input('region'):"";
        $Item->district                   = $request->input('district');
        $Item->contact_person             = $request->input('contact_person');
        $Item->phone                      = ($request->has('phone'))?$request->input('phone'):"";
        $Item->coordinates                = $request->input('coordinates');
        $Item->types                      = $request->input('types');
        $Item->level                      = $request->input('level');
        $Item->parent_id                  = $request->input('parent_id');


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
        return Institutions::find($id);
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
        $Item=Institutions::find($id);

        $Item->name                       = $request->input('name');
        $Item->region                     = ($request->has('region'))?$request->input('region'):"";
        $Item->district                   = $request->input('district');
        $Item->contact_person             = $request->input('contact_person');
        $Item->phone                      = ($request->has('phone'))?$request->input('phone'):"";
        $Item->coordinates                = $request->input('coordinates');
        $Item->types                      = $request->input('types');
        $Item->level                      = $request->input('level');
        $Item->parent_id                  = $request->input('parent_id');


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
        $Item= Institutions::find($id);
        $Item->delete();
    }
}
