@extends ('layout.dasboard')

@section('content')

 <section class="section">
        <div class="card">
            <div class="card-header">
               <a href="/transaksi/tambah">TAMBAH DATA</a>
            </div>
              <div class="card-body">
                <table class="table table-dark" id="table1">
                  <thead>
                    <tr class="bg-success">
                	
                		<th>ID TRANSAKSI</th>
                		<th>ID ADMIN</th>
                		<th>TRANSAKSI TANGGAL</th>
                		<th>TRANSAKSI NONOTA</th>
                		<th>TRANSAKSI STATUS</th>
                		<th colspan="3">AKSI</th>
                  </tr>
                	</thead>
           <tbody>
             @foreach($transaksi as $transaksi)
             <tr class="isi">
           
             <td class="bg-info">{{ $transaksi->id_transaksi }}</td>
              <td class="bg-info">{{ $transaksi->id_admin }}</td>
             <td class="bg-info">{{ $transaksi->transaksi_tanggal }}</td>
             <td class="bg-info">{{ $transaksi->transaksi_nonota }}</td>
              <td class="bg-info">{{ $transaksi->transaksi_status }}</td>
              <td class="bg-info"><a href="/transaksi_detail" class="btn btn-warning">detail</a>
              <td class="bg-info"><a href="/transaksi/edit/{{ $transaksi->id }}" class="btn btn-warning">EDIT</a></td>
          <td class="bg-info"><a href="/transaksi/hapus/{{ $transaksi->id }}" class="btn btn-danger">DELETE</a></td>
       
    </tr>
    @endforeach
  </tbody>
</table>  
</section>
@endsection