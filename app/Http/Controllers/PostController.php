<?php

namespace App\Http\Controllers;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllPostSuperAdmin()
    {   $superadminPass = post::all();
        return view('superadmin.SuperAdminPost.index', compact('superadminPass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreatePost()
    {
        return view('superadmin.SuperAdminPost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function PostStore(Request $request)
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

$superpost->save();
Session::flash('Msg','Post upload Succesfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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






    public function AdminCreatePostww()
    {

    return view('admin.AdminPost.create');


    }









}
