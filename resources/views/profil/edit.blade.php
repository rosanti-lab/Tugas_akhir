@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Profil</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/profil/update/{{$item->id_profil}}">
        <!-- {{ csrf_field() }}
        {{ method_field('PUT') }} -->
        @method('patch')
	@csrf

            <div class="form-group">
                <label for="email">TITLE</label>
                <input type="text" class="form-control" id="judul" placeholder="masukan judul" name="judul" required value="{{$item['judul']}}">
            </div>
            <div class="form-group">
                <label for="konten">DESKRIPSI</label>
                {{-- <textarea text="konten" name="konten" class="form-control" rows="10" placeholder="Enter description" required value="{{$item['konten']}}"></textarea> --}}
                <textarea input type="text" class="form-control" id="konten" rows="10" placeholder="masukan deskripsi" name="konten" required value="{{$item['konten']}}">{{$item['konten']}}</textarea>
            </div>

            <button type="submit" class="btn btn-warning btn-xs "> Save</button>


            </form>
    </div>
  </div>
@endsection
