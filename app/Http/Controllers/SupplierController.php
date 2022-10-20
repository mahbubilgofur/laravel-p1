<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
     public function index (){
    	$supplier =Supplier::all();
    	return view ('supplier.index',['supplier'=>$supplier]);
    }
     public function tambah (){
    	return view ('supplier.tambah');
    }
    
     public function tampil (Request $request){
   $supplier= Supplier::create([  			
   
'supplier_nama'=>$request->supplier_nama,
'supplier_alamat'=>$request->supplier_alamat,
'supplier_phone'=>$request->supplier_phone,
'supplier_status'=>$request->supplier_status
    	]);
    echo $supplier->id_supplier;
    	return redirect('/supplier');
    }
    public function hapus($id){
    	$supplier =Supplier::findOrFail($id);
    	$supplier->delete();
    	return redirect('/supplier');
    }


      public function edit($id){
    	$supplier =Supplier::findOrFail($id);
    	return view('supplier.edit',['supplier'=>$supplier]);
    }

    
      public function update( Request $request,$id){
    	$supplier =Supplier::findOrFail($id);
    	$supplier->update([
  'id_supplier' =>$request->id_supplier,
'supplier_nama'=>$request->supplier_nama,
'supplier_alamat'=>$request->supplier_alamat,
'supplier_phone'=>$request->supplier_phone,
'supplier_status'=>$request->supplier_status
    	]);
    	return redirect('/supplier');
    }
}
