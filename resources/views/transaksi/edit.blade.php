@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/transaksi/edit/{{ $transaksi->id}}" method="POST">
      @csrf

      
     <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">id_admin</label>
            <input type="text" class="form-control" name="id_admin" value="{{ $transaksi->id_admin }}">
        </div>
            </div>
        </div>
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">transaksi_tanggal</label>
            <input type="date" class="form-control" name="transaksi_tanggal" value="{{ $transaksi->transaksi_tanggal }}">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">transaksi_nonota</label>
            <input type="text" class="form-control" name="transaksi_nonota" value="{{ $transaksi->transaksi_nonota }}">
        </div>
            </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">transaksi_status</label>
            <input type="text" class="form-control" name="transaksi_status" value="{{ $transaksi->transaksi_status }}">
        </div>
            </div>
        </div>
        
             <div class="mb-3">
           <button type="submit" class="bg-danger">update data</button>
        </div>

    </form>
  </table>
@endsection