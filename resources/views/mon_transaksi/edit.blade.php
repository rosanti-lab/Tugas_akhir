@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Edit Monitoring Transaksi</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/mon_transaksi/update/{{$item->id_monitoring}}">

        @method('patch')
	@csrf


            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Status Monitoring</label>
                    <select name="status_monitoring" class="form-control" >
                    <option selected='selected'>{{$item->status_monitoring}}</option>
                            <option value="Ditunda">Ditunda</option>

                            <option value="selesai">Selesai</option>
                    </select>
                </div>

                </div>

                <br><br>
                <br>
                <br>
                <br>
                <br>

            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>




@endsection
