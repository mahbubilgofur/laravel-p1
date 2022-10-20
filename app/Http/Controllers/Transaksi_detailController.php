<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_detail;

class Transaksi_detailController extends Controller
{
     public function index (){
    	$transaksi_detail =Transaksi_detail::all();
    	return view ('transaksidetail.index',['transaksi_detail'=>$transaksi_detail]);
    }
     public function tambah (){
    	return view ('transaksidetail.tambah');
    }
    
     public function tampil (Request $request){
    Transaksi_detail::create([  			

'id_transaksi'=>$request->id_transaksi,
'id_barang'=>$request->id_barang,
'transaksi_jenis'=>$request->transaksi_jenis,
'transaksi_harga'=>$request->transaksi_harga,
 'transaksi_jumlah'=>$request->transaksi_jumlah,
'transaksi_detail_status'=>$request->transaksi_detail_status
 ]);
    echo $transaksi_detail->id_transaksi_detail;
    	return redirect('/transaksi_detail');
    }
    public function hapus($id){
    	$transaksi_detail =Transaksi_detail::findOrFail($id);
    	$transaksi_detail->delete();
    	return redirect('/transaksi_detail');
    }


      public function edit($id){
    	$transaksi_detail =Transaksi_detail::findOrFail($id);
    	return view('transaksidetail.edit',['transaksi_detail'=>$transaksi_detail]);
    }

    
      public function update( Request $request,$id){
    	$transaksi_detail =Transaksi_detail::findOrFail($id);
    	$transaksi_detail->update([
   'id_transaksi_detail'=>$request->id_transaksi_detail,
'id_transaksi'=>$request->id_transaksi,
'id_barang'=>$request->id_barang,
'transaksi_jenis'=>$request->transaksi_jenis,
'transaksi_harga'=>$request->transaksi_harga,
     'transaksi_stok'=>$request->transaksi_jumlah,
'transaksi_detail_status'=>$request->transaksi_detail_status
    	]);
    	return redirect('/transaksi_detail');
    }

}
