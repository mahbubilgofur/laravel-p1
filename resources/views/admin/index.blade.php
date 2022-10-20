@extends ('layout.dasboard')

@section('content')

 <section class="section">
        <div class="card">
            <div class="card-header">
               <a href="/admin/tambah">TAMBAH DATA</a>
            </div>
             <div class="card-body">
                <table class="table table-dark" id="table1">
                  <thead>
                    <tr class="bg-success">
                		<th>ID ADMIN</th>
                		<th>PASSWORD</th>
                		<th>ADMIN LEVEL</th>
                		<th>ADMIN NAMA</th>
                		<th>ADMIN STATUS</th>
                		<th>AKSI</th>
                  </tr>
                	</thead>
           <tbody>
             @foreach($admin as $admin)
             <tr class="isi">
             <td class="bg-info">{{ $admin->id_admin }}</td>
             <td class="bg-info">{{ $admin->password }}</td>
             <td class="bg-info">{{ $admin->admin_level }}</td>
              <td class="bg-info">{{ $admin->admin_nama }}</td>
              <td class="bg-info">{{ $admin->admin_status }}</td>
              <td class="bg-info"><a href="/admin/edit/{{ $admin->id }}" class="btn btn-warning">EDIT</a>
          <a href="/admin/hapus/{{ $admin->id }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
</section>
@endsection