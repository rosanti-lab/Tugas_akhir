@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Info Sampah Organik</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/infosampah/update/{{$item->id_info_sampah}}">
        <!-- {{ csrf_field() }}
        {{ method_field('PUT') }} -->
        @method('patch')
	@csrf
            <div class="form-group">
                <label for="nama">IMAGE</label>
                <input type="file" class="form-control" id="image" placeholder="masukan gambar" name="image" required value="{{$item['image']}}">
            </div>

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