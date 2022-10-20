<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
     public function index (){
    	$jenis =Jenis::all();
    	return view ('jenis.index',['jenis'=>$jenis]);
    }
     public function tambah (){
    	return view ('jenis.tambah');
    }
    
     public function tampil (Request $request){
    $jenis=Jenis::create([  			
    
'jenis_nama'=>$request->jenis_nama,
'jenis_status'=>$request->jenis_status

    	]);
    echo $jenis->id_jenis;
    	return redirect('/jenis');
    }
    public function hapus($id){
    	$jenis =Jenis::findOrFail($id);
    	$jenis->delete();
    	return redirect('/jenis');
    }


      public function edit($id){
    	$jenis =Jenis::findOrFail($id);
    	return view('jenis.edit',['jenis'=>$jenis]);
    }

    
      public function update( Request $request,$id){
    	$jenis =Jenis::findOrFail($id);
    	$jenis->update([
 'id_jenis' =>$request->id_jenis,
'jenis_nama'=>$request->jenis_nama,
'jenis_status'=>$request->jenis_status
    	]);
    	return redirect('/jenis');
    }
}
