@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/supplier/edit/{{ $supplier->id }}" method="POST">
      @csrf

        <div class="mb-3">
           <label for="" class="form-label">id_supplier</label>
           <input type="text" class="form-control" name="id_supplier" value="{{ $supplier->id_supplier }}">
        </div>
   
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">supplier_nama</label>
            <input type="text" class="form-control" name="supplier_nama" value="{{ $supplier->supplier_nama }}">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">supplier_alamat</label>
            <input type="text" class="form-control" name="supplier_alamat" value="{{ $supplier->supplier_alamat }}">
        </div>
            </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">supplier_phone</label>
            <input type="text" class="form-control" name="supplier_phone" value="{{ $supplier->supplier_phone }}">
        </div>
            </div>
        </div>
         <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">supplier_status</label>
            <input type="text" class="form-control" name="supplier_status" value="{{ $supplier->supplier_status }}">
        </div>
            </div>
        </div>
       
             <div class="mb-3">
           <button type="submit" class="bg-danger">update data</button>
        </div>

    </form>
  </table>
@endsection