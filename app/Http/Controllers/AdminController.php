<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index (){
    	$admin =Admin::all();
    	return view ('admin.index',['admin'=>$admin]);
    }
     public function tambah (){

    	return view ('admin.tambah');
    }
    
     public function tampil (Request $request){
  $admin=  Admin::create([  			
'username'=>$request->username,
'password'=>$request->password,
'admin_level'=>$request->admin_level,
'admin_nama'=>$request->admin_nama,
'admin_status'=>$request->admin_status
    	]);
  echo $admin->id_admin;;
    	return redirect('/admin');
    }
    public function hapus($id){
    	$admin =Admin::findOrFail($id);
    	$admin->delete();
    	return redirect('/admin');
    }


      public function edit($id){
    	$admin =Admin::findOrFail($id);
    	return view('admin.edit',['admin'=>$admin]);
    }

    
      public function update( Request $request,$id){
    	$admin =Admin::findOrFail($id);
    	$admin->update([
 'id_admin'=>$request->id_admin,
'username'=>$request->username,
'password'=>$request->password,
'admin_level'=>$request->admin_level,
'admin_nama'=>$request->admin_nama,
'admin_status'=>$request->admin_status
    	]);
    	return redirect('/admin');
    }












}
