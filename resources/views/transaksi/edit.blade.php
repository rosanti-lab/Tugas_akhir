@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Data Transaksi yang Masuk </strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/transaksi/update/{{$item->id}}">
        @method('patch')
	@csrf

            {{-- <div class="form-group">
                <label for="email">STATUS PENGIRIMAN</label>
                <input type="text" class="form-control" id="berat" placeholder="masukan status pengiriman" name="status_pengiriman" required value="{{$item['status_pengiriman']}}">
            </div> --}}
            <div class="form-group">
                <label for="status">status</label>
                <select name="status_pengiriman" class="form-control" >
                <option selected='selected'>{{$item->status_pengiriman}}</option>
                        <option value="Proses Pengiriman">Proses Pengiriman</option>
                        <option value="dikirim">Dikirim</option>
                        <option value="selesai">Terkirim</option>
                </select>
              </div>
              <br>
              <br>
              <br>
              <br>



            <button type="submit" class="btn btn-warning btn-xs "> Save</button>


            </form>
    </div>
  </div>
@endsection
