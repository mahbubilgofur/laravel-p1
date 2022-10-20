@extends ('layout.dasboard')

@section('content')

 <section class="section">
        <div class="card">
            <div class="card-header">
               <a href="#">TAMBAH DATA</a>
            </div>
             <div class="card-body">
                <table class="table table-dark" id="table1">
                  <thead>
                    <tr class="bg-success"> 
                	
                		<th>ID TRANSAKSI DETAIL</th>
                		<th>ID TRANSAKSI</th>
                		<th>ID BARANG</ th>
                		<th>TRANSAKSI JENIS</th>
                		<th>TRANSAKSI HARGA</th>
                    <th>TRANSAKSI JUMLAH</th>
                    <th>TRANSAKSI DETAIL STATUS</th>
                		<th>AKSI</th>
                  </tr>
                	</thead>
           <tbody>
             @foreach($transaksi_detail as $transaksi_detail)
             <tr class="isi">
            
             <td class="bg-info">{{ $transaksi_detail->id_transaksi_detail }}</td>
              <td class="bg-info">{{ $transaksi_detail->id_transaksi }}</td>
             <td class="bg-info">{{ $transaksi_detail->id_barang }}</td>
             <td class="bg-info">{{ $transaksi_detail->transaksi_jenis }}</td>
              <td class="bg-info">{{ $transaksi_detail->transaksi_harga }}</td>
               <td class="bg-info">{{ $transaksi_detail->transaksi_jumlah }}</td>
                <td class="bg-info">{{ $transaksi_detail->transaksi_detail_status }}</td>
              <td class="bg-info"><a href="/transaksi_detail/edit/{{ $transaksi_detail->id }}" class="btn btn-warning">EDIT</a>
          <a href="/transaksi_detail/hapus/{{ $transaksi_detail->id }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
</section>
@endsection