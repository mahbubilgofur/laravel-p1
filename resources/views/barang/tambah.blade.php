@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/barang/tampil" method="POST">
      @csrf

       
   
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">barang_kode</label>
            <input type="text" class="form-control" name="barang_kode">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">barang_nama</label>
            <input type="text" class="form-control" name="barang_nama">
        </div>
            </div>
        </div>
               <div class="form-group">
        <label>Id jenis</label>
        <select class="form-control" name="id_jenis">
            <option>Silahkan dipilih</option>
            @foreach($jenis as $jenis)
            <option value="{{$jenis->id_jenis}}">{{$jenis->jenis_nama }}</option>
            @endforeach
        </select>
    </div>
       <div class="form-group">
        <label>Id Supplier</label>
        <select class="form-control" name="id_supplier">
            <option>Silahkan dipilih</option>
            @foreach($supplier as $supplier)
            <option value="{{$supplier->id_supplier}}">{{$supplier->supplier_nama }}</option>
            @endforeach
        </select>
    </div>
         <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">harga_jual</label>
            <input type="text" class="form-control" name="harga_jual">
        </div>
            </div>
        </div>
        </div>

          <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">barang_status</label>
            <input type="text" class="form-control" name="barang_status">
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