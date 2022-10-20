@extends ('layout.dasboard')

@section('content')

 <section class="section">
        <div class="card">
            <div class="card-header">
               <a href="/jenis/tambah">TAMBAH DATA</a>
            </div>
            <div class="card-body">
                <table class="table table-dark" id="table1">
                  <thead>
                    <tr class="bg-success">
                	
                		<th scope="col">id_jenis_</th>
                		<th scope="col">jenis_nama</th>
                		<th scope="col">jenis_status</th>
                		<th scope="col">AKSI</th>
                  </tr>
                	</thead>
           <tbody>
             @foreach($jenis  as $jenis )
             <tr class="isi">
            
             <td class="bg-info">{{ $jenis->id_jenis }}</td>
             <td class="bg-info">{{ $jenis->jenis_nama }}</td>
             <td class="bg-info">{{ $jenis->jenis_status }}</td>
              <td class="bg-info"><a href="/jenis/edit/{{ $jenis->id }}" class="btn btn-warning">EDIT</a>
          <a href="/jenis/hapus/{{ $jenis->id }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
</section>
@endsection