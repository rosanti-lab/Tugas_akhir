@extends('main2')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Note Monitoring Sampah Organik</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/csr_sampahorganik/update/{{$item->id}}">
        @method('patch')
	@csrf

            {{-- <div class="form-group">
                <label for="email">TITLE</label>
                <input type="text" class="form-control" id="judul" placeholder="masukan judul" name="judul" required value="{{$item['judul']}}">
            </div> --}}

            <div class="form-group">
                <label for="no_telepon">Note</label>
                <input type="text" class="form-control" rows="10" id="note" placeholder="masukan deskripsi" name="note" required value="{{$item['note']}}">
            </div>

            {{-- <div class="form-group">
                <label for="nama">IMAGE</label>
                <input type="file" class="form-control" id="image" placeholder="masukan gambar" name="image" required value="{{$item['image']}}">
            </div> --}}

            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>




@endsection
