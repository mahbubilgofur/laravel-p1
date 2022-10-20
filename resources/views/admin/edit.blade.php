@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/admin/edit/{{ $admin->id }}" method="POST">
      @csrf

        <div class="mb-3">
           <label for="" class="form-label">id_admin</label>
           <input type="text" class="form-control" name="id_admin" value="{{ $admin->id_admin }}">
        </div>
   
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">username</label>
            <input type="text" class="form-control" name="username" value="{{ $admin->username }}">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">password</label>
            <input type="text" class="form-control" name="password" value="{{ $admin->password }}">
        </div>
            </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">admin_level</label>
            <input type="text" class="form-control" name="admin_level" value="{{ $admin->admin_level }}">
        </div>
            </div>
        </div>
         <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">admin_nama</label>
            <input type="text" class="form-control" name="admin_nama" value="{{ $admin->admin_nama }}">
        </div>
            </div>
        </div>
         <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">admin_status</label>
            <input type="text" class="form-control" name="admin_status" value="{{ $admin->admin_status }}">
        </div>
            </div>
        </div>
        </div>
             <div class="mb-3">
           <button type="submit" class="bg-danger">Tambah data</button>
        </div>

    </form>
  </table>
@endsection