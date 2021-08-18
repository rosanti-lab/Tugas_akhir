@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Pendapatan Sampah Organik </strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/sampahorganik/update/{{$item->id}}">
        {{-- <!-- {{ csrf_field() }}
        {{ method_field('PUT') }} --> --}}
        @method('patch')
	@csrf

            <div class="form-group">
                <label for="email">BERAT (KG)</label>
                <input type="number" class="form-control" id="berat" placeholder="masukan berat" name="berat" required value="{{$item['berat']}} ">
            </div>
            <div class="col-md-4">
                        <div class="form-group">
                            <label for="status">Status Penjemputan</label>
                            <select name="status_penjemputan" class="form-control" >
                            <option selected='selected'>{{$item->status_penjemputan}}</option>
                                    <option value="Menunggu">Menunggu</option>
                                    <option value="Proses Penjemputan">Proses Penjemputan</option>
                                    <option value="selesai">Selesai</option>
                            </select>
                        </div>
            <!-- <div class="form-group">
                <label for="no_telepon">Status Penjemputan</label>
                <!-- <textarea id="konten" name="konten" class="form-control" rows="10" placeholder="Enter description"></textarea> -->
                <!-- <input type="text" class="form-control" id="status_penjemputan" rows="10" placeholder="masukan Status Penjemputan" name="konten" required value="{{$item['status_penjemputan']}}">
            </div> -->
            <br>
            <br>
            <br>

            <button type="submit" class="btn btn-warning btn-xs "> Save</button>


            </form>
    </div>
  </div>
@endsection
