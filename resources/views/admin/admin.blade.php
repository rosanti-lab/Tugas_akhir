@extends ('layout/main')

@section('judul','admin')

@section('page_title','ADMIN')

@section('container')

<table class="table table-sm" >
  <thead>
    <tr style="background:#708090;color:#fff;">
      <!-- <th scope="col">Foto</th> -->
      <th scope="col">Id Admin</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($admin as $admin)
    <tr>
      <!-- <td>{{ $admin->foto}}</td> -->
      <td>{{ $admin->id}}</td>
      <td>{{ $admin->name}}</td>
      <td>{{ $admin->email}}</td>
      <td>{{ $admin->no_hp}}</td>
      <td>{{ $admin->alamat}}</td>
      <td>
					<!-- <a href="/admin/edit/{{$admin['id_admin']}}" class="btn btn-default btn-xs ">EDIT</a> -->
					<form action="/admin/destroy/{{$admin['id_admin']}}" method="post">
            @method('delete')
            @csrf
					<button  type="submit" class="btn btn-danger btn-xs pesan "onclick="return confirm ('Apa Anda yakin ingin menghapus ini')">HAPUS</button></form>
				</td>
    </tr>
    
    @endforeach
  </tbody>
</table>
	
@section('footer')

<script>
  $('.pesan').click(function(){
    swal("Pesanan Berhasil dibuat!", "You clicked the button!", "success");
  });
</script>
@stop

@endsection