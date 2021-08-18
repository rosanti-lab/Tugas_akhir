@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Detail Data Pembeli</strong>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
    <div class="card-body card-block">
        <form method="post" action="transaksi/details/{{$item->id}}">

        @method('patch')
	@csrf
    <tr>
        <th>Data Masuk</th>
        <td>{{ $item->create}}</td>
    </tr>
    <tr>
        <th>Nama Customer</th>
        <td>{{ $item->name}}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $item->alamat}}</td>
    </tr>
    <tr>
        <th>Nomor Telephon</th>
        <td>{{ $item->telephon}}</td>
    </tr>
    <tr>
        <th>Nama Produk</th>
        <td>{{ $item->nama}}</td>
    </tr>
    <tr>
        <th>Jumlah Pembelian</th>
        <td>{{ $item->berat_produk}}</td>
    </tr>
    <tr>
        <th>harga</th>
        <td>Rp. {{ $item->harga * $item->berat_produk}}</td>
    </tr>
    <tr>
        <th>Total Pembayaran</th>
        <td>Rp. {{ $item->harga * $item->berat_produk + $item->ongkir}}</td>
    </tr>
    <tr>
        <th>Bukti Pembayaran</th>
        <td><img src="{{ asset('public/assets/bukti_tf/' . $item->bukti_tf) }}" alt="" style="width: 20%"></td>
    </tr>
    <tr>
        <th>Ekspedisi Pengiriman</th>
        <td>{{ $item->jasa_pengiriman}}</td>
    </tr>
</table>
</thead>
{{-- <div class="form-group">
    <label for="status">status</label>
    <select name="status_pengiriman" class="form-control" >
    <option selected='selected'>{{$item->status_pengiriman}}</option>
            <option value="Proses Pengiriman">Proses Pengiriman</option>
            <option value="dikirim">Dikirim</option>
            <option value="selesai">Terkirim</option>
    </select>
  </div> --}}



            {{-- <button type="submit" class="btn btn-warning btn-xs "> Save</button> --}}
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Kembali</button>


            </form>
    </div>
  </div>




@endsection
