@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Info Sampah Organik</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/about/update/{{$item->id}}">
        <!-- {{ csrf_field() }}
        {{ method_field('PUT') }} -->
        @method('patch')
	@csrf
            <div class="form-group">
                <label for="nama">JUDUL</label>
                <input type="text" class="form-control" id="title" placeholder="masukan gambar" name="title" required value="{{$item['title']}}">
            </div>

            <div class="form-group">
                <label for="email">Image</label>
                <input type="file" class="form-control" id="photo" placeholder="masukan gambar" name="image" required value="{{$item['photo']}}">
            </div>

            <div class="form-group">
                <label for="no_telepon">DESKRIPSI</label>
                <input type="text" class="form-control" id="konten" placeholder="masukan deskripsi" name="konten" required value="{{$item['konten']}}">
            </div>

            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>


        
      
@endsection