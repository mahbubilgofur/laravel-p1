@extends ('layout.dasboard')

@section('content')

 <section class="section">
        <div class="card">
            <div class="card-header">
               <a href="/supplier/tambah">TAMBAH DATA</a>
            </div>
              <div class="card-body">
                <table class="table table-dark" id="table1">
                  <thead>
                    <tr class="bg-success">
                	
                		<th scope="col">ID SUPPLIER</th>
                		<th scope="col">SUPPLIER NAMA</th>
                		<th scope="col">SUPPLIER ALAMAT</th>
                		<th scope="col">SUPPLIER PHONE</th>
                		<th scope="col">SUPPLIER STATUS</th>
                		<th scope="col">AKSI</th>
                  </tr>
                	</thead>
           <tbody>
             @foreach($supplier  as $supplier )
             <tr class="isi">
             
             <td class="bg-info">{{ $supplier->id_supplier }}</td>
             <td class="bg-info">{{ $supplier->supplier_nama }}</td>
             <td class="bg-info">{{ $supplier->supplier_alamat }}</td>
              <td class="bg-info">{{ $supplier->supplier_phone }}</td>
              <td class="bg-info">{{ $supplier->supplier_status }}</td>
              <td class="bg-info"><a href="/supplier/edit/{{ $supplier->id }}" class="btn btn-warning">EDIT</a>
          <a href="/supplier/hapus/{{ $supplier->id }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
</section>
@endsection