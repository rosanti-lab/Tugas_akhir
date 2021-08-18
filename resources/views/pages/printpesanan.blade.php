<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Pembayaran</title>
</head>
<body>
    <table class="table table-bordered mb-5">
        <thead>
            {{-- <title>Nota Pembayaran Transaksi Maggot Wiralodra</title> --}}
            <tr>
                <th style="text-align:center" colspan="2">
                    <img src="assets/img/bmw.png" alt="" style ="float:left; height: 63px; width: auto; padding: -20px 0; margin: -20px 0;" style="text-align:center" colspan="2"> NOTA PEMBAYARAN MAGGOT WIRALODRA
                </th>
            </tr>
            {{-- <tr>
                <th style="text-align:center" colspan="2">
                    <h3 style="font-size:16px;font-type:bold">MAGGOT WIRALODRA</h3>
                </th>
            </tr> --}}
            <tr class="table-danger">
                <th style="text-align:center" colspan="2">
                    <p style="font-size:15px;">Jl. Raya Balongan RT/RW 005./002 Desa Balongan, Kec. Balongan ,Kab. Indramayu, Jawa Barat </p>
                    <hr style="font-type:bold">
                </th>
            </tr>
            <tr>
				<th style="width: 100%;line-height: 20%;" >
				</th>
			</tr>


            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Pesanan Dibuat Pada : {{$detail->create}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Nama                : {{$detail->name}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Alamat               : {{$detail->alamat}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Alamat               : {{$detail->telephon}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Nama Produk          : {{$detail->nama}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Jumlah Pembelian     : {{$detail->berat_produk}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Total Pembayaran     : Rp. {{ $detail->harga * $detail->berat_produk + $detail->ongkir}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:center">
					<pre style="font-size:15px; ">                      Terima Kasih :)</pre>
				</th>
			</tr>


        </thead>
        <tbody>

                {{-- @if($detail)
                       <pre style="background=#000;">
                       Dibuat Pada      : {{ $detail->create}}
                       Nomor Pesanan    : {{ $detail->id}}
                       Silahkan Lakukan Pembayaran Sesuai Total Pembayaran Ke
                       Nama             : Rosanti
                       Bank BRI         : 2324567890</pre>

                       <pre>
                       Nama             :   {{ $detail->name}}
                       Alamat           :   {{ $detail->alamat}}
                       Telephone        :   {{ $detail->telephon}}
                       Nama Produk      :   {{ $detail->nama}}
                       Jumlah Pembelian :   {{ $detail->berat_produk}}
                       Jasa Pengiriman  :   {{ $detail->jasa_pengiriman}}
                       Bukti Transfer   :   <img src="{{ asset('public/assets/bukti_tf/' . $detail->bukti_tf) }}" alt="" style="width: 10%">
                       Harga            :   Rp. {{ $detail->harga * $detail->berat_produk}}
                       Ongkos Kirim     :   Rp. {{ $detail->ongkir}}
                       <pre>
                                                        Total Pembayaran :   Rp. {{ $detail->harga * $detail->berat_produk + $detail->ongkir}}
                       </pre>

                       <a href="{{ url('/print/'.$detail->id. '/cetak') }}" class="btn btn-secondary btn-sm"></a>


                      </pre>

                    @endif --}}
                  </tr>
        </tbody>
    </table>
</body>
</html>
