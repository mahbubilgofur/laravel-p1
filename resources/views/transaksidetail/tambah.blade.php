@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/transaksi_detail/tampil" method="POST">
      @csrf

        <div class="mb-3">
           <label for="" class="form-label">id_transaksi</label>
           <input type="text" class="form-control" name="id_transaksi_detail">
        </div>
     <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">id_admin</label>
            <input type="text" class="form-control" name="id_transaksi">
        </div>
            </div>
        </div>
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">transaksi_tanggal</label>
            <input type="text" class="form-control" name="id_barang">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">transaksi_nonota</label>
            <input type="text" class="form-control" name="transaksi_jenis">
        </div>
            </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">transaksi_status</label>
            <input type="text" class="form-control" name="transaksi_harga">
        </div>
            </div>
        </div>
            <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">transaksi_status</label>
            <input type="text" class="form-control" name="transaksi_jumlah">
        </div>
            </div>
        </div>
            <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">transaksi_status</label>
            <input type="text" class="form-control" name="transaksi_detail_status">
        </div>
            </div>
        </div>
        
             <div class="mb-3">
           <button type="submit" class="bg-danger">Tambah data</button>
        </div>

    </form>
  </table>
@endsection