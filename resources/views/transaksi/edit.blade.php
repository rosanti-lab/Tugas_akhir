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
            <!-- <div class="col-md-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <div class="m-b-10">
                                        <label>Status Pengiriman</label>
                                    </div>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status_pengiriman" value="Y" checked>
                                        <i class="input-helper"></i> Selesai
                                    </label>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status_pengiriman" value="N">
                                        <i class="input-helper"></i> Belum
                                    </label>
                                </div>
                            </div>
                </div> -->
            <!-- <div class="form-group">
                <label for="no_telepon">Status Penjemputan</label>
                <!-- <textarea id="konten" name="konten" class="form-control" rows="10" placeholder="Enter description"></textarea> -->
                <!-- <input type="text" class="form-control" id="status_penjemputan" rows="10" placeholder="masukan Status Penjemputan" name="konten" required value="{{$item['status_penjemputan']}}">
            </div> -->

            <button type="submit" class="btn btn-warning btn-xs "> Save</button>


            </form>
    </div>
  </div>
@endsection
