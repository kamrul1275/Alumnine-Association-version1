<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function AdminloginFrom()
    {
         return view('admin.login');
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Adminlogin(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


 if( Auth::guard('admin')->attempt(['email'=>$request->email,
        'password'=>$request->password ]) ){

        return redirect('/admin-dashboard');

        }else{

    Session::flash('Msg', 'Invalid Email & Password');
    return redirect('/admin-pannel');

   }

    }


    public function AdminLogout()
    {
       Auth::guard('admin')->logout();


      return redirect('/admin-pannel');


    }







// admin post area



public function AdminCreatePostww()
{

return view('admin.AdminPost.create');


}





public function AdminCreatePoststore(Request $request)
{
    $validated = $request->validate([
        'titel' => 'required',
        'heading' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);




 $superpost = new Post;
 $superpost->titel =$request->titel;
 $superpost->heading =$request->heading;

 $superpost->description =$request->description;

 if($request->file('image')){
 $file= $request->file('image');
 $filename= $file->getClientOriginalName();
 $file-> move(public_path('public/Image'), $filename);
$superpost['image']= $filename;
 }

$superpost->user_id =auth()->check() ? auth()->user()->id : null;

 $superpost-> superadmin_id =  auth()->guard('superadmin')->check() ? auth()->guard('superadmin')->user()->id : null;
 $superpost-> admin_id =  auth()->guard('admin')->check() ? auth()->guard('admin')->user()->id : null;

 $superpost->save();
 Session::flash('Msg','Post upload Succesfully');

return redirect()->back();
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
        //
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
