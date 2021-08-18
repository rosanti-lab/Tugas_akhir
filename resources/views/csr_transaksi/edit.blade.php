@extends('main2')

@section('title', 'Dashboard')

@section('breadcrumbs')
  <div class="card">
    <div class="card-header">
        <strong>Note Monitoring Transaksi</strong>
    </div>
    <div class="card-body card-block">
        <form method="post" action="/csr_transaksi/update/{{$item->id_monitoring}}">
        @method('patch')
	@csrf



            <div class="form-group">
                <label for="no_telepon">Note</label>
                <input type="text" class="form-control" rows="10" id="note" placeholder="masukan deskripsi" name="note" required value="{{$item['note']}}">
            </div>



            <button type="submit" class="btn btn-warning btn-xs "> Edit</button>
            <button type="button" class="btn btn-warning btn-xs" onclick="self.history.back()"><i class="zmdi zmdi-close"></i> Cancel</button>


            </form>
    </div>
  </div>




@endsection
