@extends ('layout.dasboard')

@section('content')
 <table border="1">
    <form action="/jenis/edit/{{$jenis->id }}" method="POST">
      @csrf

        <div class="mb-3">
           <label for="" class="form-label">id_jenis</label>
           <input type="text" class="form-control" name="id_jenis" value="{{ $jenis->id_jenis }}">
        </div>
   
            <div class="row">
                <div class="col-4">
               <div class="mb-3">
            <label for="" class="form-label">jenis_nama</label>
            <input type="text" class="form-control" name="jenis_nama" value="{{ $jenis->jenis_nama }}">
        </div>
        </div>
                    <div class="col-8">
                 <div class="mb-3">
            <label for="" class="form-label">jenis_status</label>
            <input type="text" class="form-control" name="jenis_status" value="{{ $jenis->jenis_status }}">
        </div>
            </div>
        </div>
                  
       
             <div class="mb-3">
           <button type="submit" class="bg-danger">update data</button>
        </div>

    </form>
  </table>
@endsection