<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        $Item = new Users();

        $Item->fname                    = $request->input('fname');
        $Item->mname                    = ($request->has('mname'))?$request->input('mname'):"";
        $Item->lname                    = $request->input('lname');
        $Item->gender                   = $request->input('gender');
        $Item->user_name                = $request->input('user_name');
        $Item->mname                    = ($request->has('email'))?$request->input('email'):"";
        $Item->password                 = $request->input('password');
        $Item->church                   = $request->input('church');
        $Item->user_role_id             = $request->input('user_role_id');
        $Item->phone_number             = ($request->has('phone_number'))?$request->input('phone_number'):"";

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
        return User::find($id);

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

        $Item = Users::find($id);

        $Item->fname                    = $request->input('fname');
        $Item->mname                    = ($request->has('mname'))?$request->input('mname'):"";
        $Item->lname                    = $request->input('lname');
        $Item->gender                   = $request->input('gender');
        $Item->user_name                = $request->input('user_name');
        $Item->mname                    = ($request->has('email'))?$request->input('email'):"";
        $Item->password                 = $request->input('password');
        $Item->church                   = $request->input('church');
        $Item->user_role_id             = $request->input('user_role_id');
        $Item->phone_number             = ($request->has('phone_number'))?$request->input('phone_number'):"";

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
        $Item = USers::find($id);
        $Item->delete();
    }
}
