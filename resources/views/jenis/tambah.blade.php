@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/jenis/tampil" method="POST">
      @csrf

    
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">jenis_nama</label>
            <input type="text" class="form-control" name="jenis_nama">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">jenis_status</label>
            <input type="text" class="form-control" name="jenis_status">
        </div>
            </div>
        </div>
                  
       
             <div class="mb-3">
           <button type="submit" class="bg-danger">Tambah data</button>
        </div>

    </form>
  </table>
@endsection