@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Info Transaksi</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/infotransaksi/update/{{$item->id_info_transaksi}}">
        @method('patch')
	@csrf

            <div class="form-group">
                <label for="email">TITLE</label>
                <input type="text" class="form-control" id="judul" placeholder="masukan judul" name="judul" required value="{{$item['judul']}}">
            </div>

            <div class="form-group">
                <label for="no_telepon">DESKRIPSI</label>
                <input type="text" class="form-control" rows="10" id="konten" placeholder="masukan deskripsi" name="konten" required value="{{$item['konten']}}">
            </div>

            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>


        
      
@endsection