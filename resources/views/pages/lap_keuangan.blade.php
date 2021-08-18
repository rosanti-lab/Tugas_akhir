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
                <th style="text-align:left" colspan="2">
                    <img src="assets/img/bmw.png" alt="" style ="float:left; height: 63px; width: auto; padding: -20px 0; margin: -20px 0;" style="text-align:center" colspan="2"> LAPORAN KEUANGAN BUDIDAYA MAGGOT WIRALODRA
                </th>
            </tr>
            <tr>
                <th style="text-align:center" colspan="2">
                    <h3 style="font-size:16px;font-type:bold"></h3>
                </th>
            </tr>
            <tr class="table-danger">
                <th style="text-align:center" colspan="2">
                    <p style="font-size:15px;">MITRA BINAA TIM CSR PERTAMINA RU VI BALONGAN </p>
                    <hr style="font-type:bold">
                </th>
            </tr>
            <tr>
				<th style="width: 100%;line-height: 20%;" >
				</th>
			</tr>

            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Periode Laporan     : {{$item->hari}}</pre>
				</th>
			</tr>

            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Nama Produk          : {{$item->nama}}</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Jumlah Terjual       : {{$item->total_terjual}} Pack</pre>
				</th>
			</tr>
            <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Pemasukan            : Rp. {{$item->harga * $item->total_terjual}}</pre>
				</th>
			</tr>
            {{-- <tr>
				<th style="text-align:left">
					<pre style="font-size:15px; ">Total Pembayaran     : Rp. {{ $item->harga * $item->berat_produk + $item->ongkir}}</pre>
				</th>
			</tr> --}}
            <tr>
				<th style="text-align:center">
					<pre style="font-size:15px; ">                      Terima Kasih :)</pre>
				</th>
			</tr>


        </thead>
        <tbody>


                  </tr>
        </tbody>
    </table>
</body>
</html>
