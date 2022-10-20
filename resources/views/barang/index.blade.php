@extends ('layout.dasboard')

@section('content')

 <section class="section">
        <div class="card">
            <div class="card-header">
               <a href="/barang/tambah">TAMBAH DATA</a>
            </div>
             <div class="card-body">
                <table class="table table-dark" id="table1">
                  <thead>
                    <tr class="bg-success">
                  
                		<th scope="col">ID BARANG</th>
                		<th scope="col">BARANG KODE</th>
                		<th scope="col">BARANG NAMA</th>
                		<th scope="col">JENIS NAMA</th>
                		<th scope="col">ID SUPPLIER</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">BARANG STATUS</th>
                		<th scope="col">AKSI</th>
                  </tr>
                	</thead>
           <tbody>
             @foreach($barang as $barang)
             <tr class="isi">
             <td class="bg-info">{{ $barang->id_barang }}</td>
             <td class="bg-info">{{ $barang->barang_kode }}</td>
             <td class="bg-info">{{ $barang->barang_nama }}</td>
              <td class="bg-info">{{ $barang->jenis_nama }}</td>
              <td class="bg-info">{{ $barang->supplier_nama }}</td>
               <td class="bg-info">{{ $barang->harga_jual }}</td>
                <td class="bg-info">{{ $barang->barang_status }}</td>
              <td class="bg-info"><a href="/barang/edit/{{ $barang->id }}" class="btn btn-warning">EDIT</a>
        <a href="/barang/hapus/{{ $barang->id }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
</section>
@endsection