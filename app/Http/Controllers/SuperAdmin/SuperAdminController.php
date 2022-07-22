<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('layouts.dashboard');
    // }

    public function superadminFrom()
    {
        return view('SuperAdmin.login');
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
    public function superadminLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


if( Auth::guard('superadmin')->attempt(['email' =>$request->email,
'password' => $request->password]) ){

return redirect('SuperAdmin/dashboard');

}else{

    Session::flash('Msg','Invalid Email or Password');
    return redirect('/SuperAdmin');
}





    }


    public function dashboard()
    {
        return view('layouts.dashboard');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SuperAdminlogout()
    {
      auth::guard('superadmin')->logout();
      return redirect('/SuperAdmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


// create post


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AllPost()
    {
        $createadminPass= Admin::get();
        return view('superadmin.createAdmin.index', compact('createadminPass'));
    }















    //  create admin
    public function CreateAdmin()
    {
return view('superadmin.createAdmin.create');
    }



    public function CreateAdminStore(Request $request)
    {
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>  hash::make($request->password),
        ]);
        Session::flash('Msg','Admin Create Successfully');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ListAdmin()
    {
        $createadminPass= Admin::get();
        return view('superadmin.createAdmin.index', compact('createadminPass'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
