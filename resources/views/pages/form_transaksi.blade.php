<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.2/dist/select2-bootstrap4.min.css" rel="stylesheet" />
    <title>Laravel Raja Ongkir - SantriKoding.com</title>
</head>
<body style="background: #f3f3f3">

<div class="container-fluid mt-5">
    <div class="col-md-12" style="width: 45%">
        <div class="section-tittle mb-35">
            <h4>Form Transaksi Maggot Wiralodra</h4>
        </div>
    </div>
        <!-- about-img -->
        <div class="about-img ">
            <div class="contact-right formulir_">
            <form method="post" action="/transaksi" enctype="multipart/form-data" >
        @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="" placeholder="masukan nama " name="name" required>
            </div>
            <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <input type="text" class="form-control" id="" placeholder="masukan alamat lengkap " name="alamat" required>
            </div>
            <div class="form-group">
                <label for="">Nomor Telepon </label>
                <input type="number" class="form-control" id="" placeholder="masukan nomor telepon " name="telephon" required>
            </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3>ORIGIN</h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">PROVINSI ASAL</label>
                        <select class="form-control provinsi-asal" name="province_origin">
                            <option value="0">-- pilih provinsi asal --</option>
                            @foreach ($provinces as $province => $value)
                                <option value="{{ $province  }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">KOTA / KABUPATEN ASAL</label>
                        <select class="form-control kota-asal" name="city_origin">
                            <option value="">-- pilih kota asal --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3>DESTINATION</h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">PROVINSI TUJUAN</label>
                        <select class="form-control provinsi-tujuan" name="province_destination">
                            <option value="0">-- pilih provinsi tujuan --</option>
                            @foreach ($provinces as $province => $value)
                                <option value="{{ $province  }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">KOTA / KABUPATEN TUJUAN</label>
                        <select class="form-control kota-tujuan" name="city_destination">
                            <option value="">-- pilih kota tujuan --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3>KURIR</h3>
                    <hr>
                    <div class="form-group">
                        <label>PROVINSI TUJUAN</label>
                        <select class="form-control kurir" name="courier">
                            <option value="0">-- pilih kurir --</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS</option>
                            <option value="tiki">TIKI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">BERAT (GRAM)</label>
                        <input type="number" class="form-control" name="weight" id="weight" placeholder="Masukkan Berat (GRAM)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <button class="btn btn-md btn-primary btn-block btn-check">CEK ONGKOS KIRIM</button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card d-none ongkir">
                <div class="card-body">
                    <ul class="list-group" id="ongkir"></ul>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="" enctype="multipart/form-data">

        <div>
            <label for="">Bukti Pembayaran</label>
            <input type="file"  id=""  name="bukti_tf" required>
        </div><br>
        <br>
        <br>

        <form method="post" action="" enctype="multipart/form-data">

        <button type="submit" class="btn btn-warning btn-xs bayar"> Kirim</button>
    </form>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        //active select2
        $(".provinsi-asal , .kota-asal, .provinsi-tujuan, .kota-tujuan").select2({
            theme:'bootstrap4',width:'style',
        });
        $(document).ready(function (){
				$('select[name="province_origin"]').on('change', function(){
					let provinceId = $(this).val();
                    console.log(provinceId);
						if(provinceId) {
							jQuery.ajax({
								url:'/form_transaksi/province/' +provinceId+ '/cities',
								type:"GET",
								dataType:"json",
								success:function (data) {
                                    console.log(data);
									$('select[name="city_origin"]').empty();
									$.each(data, function (key, value){
									$('select[name="city_origin"]').append('<option value="' + key +'">' + value + '</option>');
									});
                                    // $('select[name="city_origin"]').niceSelect('update');
								},
                                error:function(err){
                                    console.log(err);
                                }
							});
						}else{
							$('select[name="city_origin"]').empty();
						}
				});

				$('select[name="province_destination"]').on('change', function(){
					let provinceId = $(this).val();
                    console.log(provinceId);
						if(provinceId) {
							jQuery.ajax({
								url:'/form_transaksi/province/' +provinceId+ '/cities',
								type:"GET",
								dataType:"json",
								success:function (data) {
                                    $('select[name="city_destination"]').empty();
									$.each(data, function (key, value){
									$('select[name="city_destination"]').append('<option value="' + key +'">' + value + '</option>');
									});
                                    // $('select[name="city_destination"]').niceSelect('update');
                                },
                                error:function(err){
                                    console.log(err);
                                }
							});
						}else{
                            $('select[name="city_destination"]').empty();
                        }
				});
			});
        //ajax check ongkir
        let isProcessing = false;
        $('.btn-check').click(function (e) {
            e.preventDefault();

            let token            = $("meta[name='csrf-token']").attr("content");
            let city_origin      = $('select[name=city_origin]').val();
            let city_destination = $('select[name=city_destination]').val();
            let courier          = $('select[name=courier]').val();
            let weight           = $('#weight').val();

            console.log(city_destination);
            if(isProcessing){
                return;
            }

            isProcessing = true;
            jQuery.ajax({
                url: "/form_transaksi/checkongkir",
                data: {
                    _token:              token,
                    city_origin:         city_origin,
                    city_destination:    city_destination,
                    courier:             courier,
                    weight:              weight,
                },
                dataType: "JSON",
                type: "POST",
                success: function (response) {
                    isProcessing = false;
                    if (response) {
                        console.log(response);
                        $('#ongkir').empty();
                        $('.ongkir').addClass('d-block');
                        $.each(response[0]['costs'], function (key, value) {
                            $('#ongkir').append('<li class="list-group-item">'+response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</li>')
                        });

                    }
                },
                // error:function(err){
                //     console.log(err);
                // }
            });

        });

    });
</script>
</body>
</html>
