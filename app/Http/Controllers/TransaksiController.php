<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Transaksi_detail;

class TransaksiController extends Controller
{
     public function index (){
    	$transaksi =Transaksi::all();
    	return view ('transaksi.index',['transaksi'=>$transaksi]);
    }
     public function tambah (){
    	return view ('transaksi.tambah');
    }
    
     public function tampil (Request $request){
    $transaksi =Transaksi::create([  			
    'id_admin'=>$request->id_admin,
    'transaksi_tanggal'=>$request->transaksi_tanggal,
    'transaksi_nonota'=>$request->transaksi_nonota,
    'transaksi_status'=>$request->transaksi_status

    	]);
    echo $transaksi->id_transaksi;
    $transaksi_detail =Transaksi_detail::create([        
'id_transaksi'=>$transaksi->id_transaksi,
'id_barang'=>$request->id_barang,
'transaksi_jenis'=>$request->transaksi_jenis,
'transaksi_harga'=>$request->transaksi_harga,
 'transaksi_jumlah'=>$request->transaksi_jumlah,
'transaksi_detail_status'=>$request->transaksi_detail_status
 ]);
    echo $transaksi_detail->id_transaksi_detail;
    	return redirect('/transaksi');
    }
    public function hapus($id){
    	$transaksi =Transaksi::findOrFail($id);
    	$transaksi->delete();
    	return redirect('/transaksi');
    }


      public function edit($id){
    	$transaksi =Transaksi::findOrFail($id);
    	return view('transaksi.edit',['transaksi'=>$transaksi]);
    }

    
      public function update( Request $request,$id){
    	$transaksi =Transaksi::findOrFail($id);
    	$transaksi->update([
   'id_transaksi'=>$request->id_transaksi,
'id_admin'=>$request->id_admin,
'transaksi_tanggal'=>$request->transaksi_tanggal,
'transaksi_nonota'=>$request->transaksi_nonota,
'transaksi_status'=>$request->transaksi_status
    	]);
    	return redirect('/transaksi');
    }

}
