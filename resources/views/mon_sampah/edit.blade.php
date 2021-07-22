@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Info Sampah Organik</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/mon_sampah/update/{{$item->id}}">
       
        @method('patch')
	@csrf
            <div class="form-group">
                <label for="nama">Total Sampah Organik</label>
                <input type="text" class="form-control" id="total_sampah" placeholder="masukan total sampah organik" name="total_sampah" required value="{{$item['total_sampah']}}">
            </div>

            <div class="col-md-4">
                            <div class="form-group">
                                <div class="fg-line">
                                    <div class="m-b-10">
                                        <label>Status Monitoring</label>
                                    </div>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status_monitoring" value="Y" checked>
                                        <i class="input-helper"></i> Selesai
                                    </label>
                                    <label class="radio radio-inline m-r-20">
                                        <input type="radio" name="status_monitoring" value="N">
                                        <i class="input-helper"></i> Belum 
                                    </label>
                                </div>
                            </div>
                </div>

            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>


        
      
@endsection