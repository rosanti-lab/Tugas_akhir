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
                    <h3 style="font-size:16px;font-type:bold">MAGGOT WIRALODRA</h3>
                </th>
          </tr>
            <tr class="table-danger">
                <th style="text-align:center" colspan="2">
                    <p style="font-size:15px;">Jl. Raya Balongan RT/RW 005./002 Desa Balongan, Kec. Balongan ,Kab. Indramayu, Jawa Barat </p>
                </th>
            </tr>
                {{-- <br>
            <tr class="table-danger" >
                <th style="text-align:center" colspan="2">
                    <p style="font-size:12px;">Jl. Komp AL, Gg. H. Ganang, RT005/RW009 No. 17, Kel. Jatimakmur, Kec. Pondokgede, Kota Bekasi</p>
                </th>
            </tr> --}}

            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Pesanan Dibuat Pada : {{$detail->create}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Nama : {{$detail->name}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Alamat : {{$detail->alamat}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Alamat : {{$detail->telephon}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Nama Produk : {{$detail->nama}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Jumlah Pembelian : {{$detail->berat_produk}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<p style="font-size:15px; ">Total Pembayaran : Rp. {{ $detail->harga * $detail->berat_produk + $detail->ongkir}}</p>
				</th>
			</tr>
            <tr>
				<th style="text-align:center">
					<p style="font-size:15px; ">Terima Kasih :)</p>
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
