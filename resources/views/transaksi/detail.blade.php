@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Detail Data Pembeli</strong>
    </div>
    <div class="card-body card-block">
        {{-- <form method="post" action="/transaksi/update/{{$item->id_info_sampah}}">
        <!-- {{ csrf_field() }}
        {{ method_field('PUT') }} --> --}}
        @method('patch')
	@csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" disabled required="inputan tidak boleh kosong" id="name" name="name" required value="{{$barang_terjual['name']}}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" disabled required="inputan tidak boleh kosong" id="alamat" name="alamat" required value="{{$barang_terjual['alamat']}}">
            </div>
            <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input type="number" class="form-control" disabled required="inputan tidak boleh kosong" id="telepon" name="telepon" required value="{{$barang_terjual['telepon']}}">
            </div>
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" class="form-control" disabled required="inputan tidak boleh kosong" id="nama" name="name" required value="{{$barang_terjual['name']}}">
            </div>
            <div class="form-group">
                <label for="nama_produk">Berat Produk</label>
                <input type="text" class="form-control" disabled required="inputan tidak boleh kosong" id="berat_produk" name="berat_produk" required value="{{$barang_terjual['berat_produk']}}">
            </div>
            <div class="form-group">
                <label for="">Berat (Kurir)</label>
                <input type="number" class="form-control" disabled required="inputan tidak boleh kosong" id="berat" name="berat" required value="{{$barang_terjual['berat']}}">
            </div>
            <div class="form-group">
                <label for="">Jasa Pengiriman</label>
                <input type="text" class="form-control" disabled required="inputan tidak boleh kosong" id="bukti_tf" name="bukti_tf" required value="{{$item['bukti_tf']}}">
            </div>
            <div class="form-group">
                <label for="status">status</label>
                <select name="status_pengiriman" class="form-control" >
                <option selected='selected'>{{$item->status_pengiriman}}</option>
                        <option value="Proses Pengiriman">Proses Pengiriman</option>
                        <option value="dikirim">Dikirim</option>
                        <option value="selesai">Terkirim</option>
                </select>
              </div>


            <button type="submit" class="btn btn-warning btn-xs "> Save</button>
            {{-- <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button> --}}


            </form>
    </div>
  </div>




@endsection
