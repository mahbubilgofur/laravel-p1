@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/supplier/tampil" method="POST">
      @csrf

       
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">supplier_nama</label>
            <input type="text" class="form-control" name="supplier_nama">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">supplier_alamat</label>
            <input type="text" class="form-control" name="supplier_alamat">
        </div>
            </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">supplier_phone</label>
            <input type="text" class="form-control" name="supplier_phone">
        </div>
            </div>
        </div>
         <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">supplier_status</label>
            <input type="text" class="form-control" name="supplier_status">
        </div>
            </div>
        </div>
       
             <div class="mb-3">
           <button type="submit" class="bg-danger">Tambah data</button>
        </div>

    </form>
  </table>
@endsection