<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Jenis;
use DB;

class BarangController extends Controller
{
     public function index (){
    $barang =Barang::all();
     $barang = DB::table('tbl_barang')
                ->select('tbl_barang.*','tbl_supplier.supplier_nama','tbl_jenis.jenis_nama')        
                ->join('tbl_supplier', 'tbl_supplier.id_supplier', '=', 'tbl_barang.id_supplier')
                ->join('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_barang.id_jenis')
                ->get();

      return view ('barang.index',compact(['barang']));
    }


     public function tambah (){
       $supplier = DB::table('tbl_supplier')
        ->get();

          $jenis = DB::table('tbl_jenis')
        ->get();
        return view('barang/tambah',compact(['supplier','jenis']));
    }


    
     public function tampil (Request $request){
   $barang= Barang::create([  			

'barang_kode'=>$request->barang_kode,
'barang_nama'=>$request->barang_nama,
'id_jenis'=>$request->id_jenis,
'id_supplier'=>$request->id_supplier,
'harga_jual'=>$request->harga_jual,
'barang_status'=>$request->barang_status
    	]);

echo $barang->id_barang;
    	return redirect('/barang');
    }
    public function hapus($id){
    	$barang =barang::findOrFail($id);
    	$barang->delete();
    	return redirect('/barang');
    }


      public function edit($id){
      $barang =Barang::findOrFail($id);

                 $supplier = DB::table('tbl_supplier')
        ->get();

          $jenis = DB::table('tbl_jenis')
        ->get();

    	return view('barang.edit',compact(['barang','supplier','jenis']));
    }
    
      public function update( Request $request,$id){
    	$barang =Barang::findOrFail($id);
    	$barang->update([
'barang_kode'=>$request->barang_kode,
'barang_nama'=>$request->barang_nama,
'id_jenis'=>$request->id_jenis,
'id_supplier'=>$request->id_supplier,
'harga_jual'=>$request->harga_jual,
'barang_status'=>$request->barang_status
    	]);
      echo $barang->id_barang;
    	return redirect('/barang');
    }
}
