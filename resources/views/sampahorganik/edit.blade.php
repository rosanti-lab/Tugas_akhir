@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Pendapatan Sampah Organik </strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/sampahorganik/update/{{$item->id}}">
        <!-- {{ csrf_field() }}
        {{ method_field('PUT') }} -->
        @method('patch')
	@csrf

            <div class="form-group">
                <label for="email">BERAT (KG)</label>
                <input type="text" class="form-control" id="berat" placeholder="masukan berat" name="berat" required value="{{$item['berat']}}">
            </div>
            <div class="col-md-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <div class="m-b-10">
                                        <label>Status Penjemputan</label>
                                    </div>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status_penjemputan" value="Y" checked>
                                        <i class="input-helper"></i> Selesai
                                    </label>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status_penjemputan" value="N">
                                        <i class="input-helper"></i> Belum 
                                    </label>
                                </div>
                            </div>
                        </div>
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