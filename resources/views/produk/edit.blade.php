@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Produk</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/produk/update/{{$item->id_produk}}">
            {{-- <!-- {{ csrf_field() }}
            {{ method_field('PUT') }} --> --}}
        @method('patch')
	@csrf

            <div class="form-group">
                <label for="email">nama</label>
                <input type="text" class="form-control" id="nama" placeholder="masukan judul" name="nama" required value="{{$item['nama']}}">
            </div>
            <div class="form-group">
                <label for="email">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="masukan harga" name="harga" required value="{{$item['harga']}}">
            </div>
            <div class="form-group">
                <label for="email">Deskripsi</label>
                <textarea input type="text" class="form-control" id="deskripsi" rows="10" placeholder="masukan deskripsi" name="deskripsi" required value="{{$item['deskripsi']}}">{{$item['deskripsi']}}</textarea>
            </div>
            <div class="form-group">
                <label for="email">Stok Produk</label>
                <input type="number" class="form-control" id="stok" placeholder="masukan stok" name="stok" required value="{{$item['stok']}}">
            </div>

            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>
@endsection
