<?php

namespace App\Http\Controllers;

use App\SystemSetting;
use Illuminate\Http\Request;

class SystemSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SystemSetting::all();
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

        $Item = new SystemSetting();

        $Item->title                         = ($request->has('title'))?$request->input('title'):"";
        $Item->language                      = ($request->has('language'))?$request->input('language'):"";
        $Item->menu_position                = ($request->has('menu_position'))?$request->input('menu_position'):"";
        $Item->background                    = ($request->has('background'))?$request->input('background'):"";

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
        return SystemSetting::find($id);
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
        $Item = SystemSetting::find($id);

        $Item->title                         = ($request->has('title'))?$request->input('title'):"";
        $Item->language                      = ($request->has('language'))?$request->input('language'):"";
        $Item->menu_position                 = ($request->has('menu_position'))?$request->input('menu_position'):"";
        $Item->background                    = ($request->has('background'))?$request->input('background'):"";

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
        $Item=SystemSetting::find($id);
        $Item->delete();
    }


}
