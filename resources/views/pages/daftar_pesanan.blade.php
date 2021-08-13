<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Budidaya Maggot WIralodra </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/slick.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('logisticexpress-master')}}/assets/css/style.css">

            <style type="text/css">
                body{background:#fff;font-family:arial;}
                #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 10px #ddd;}
                h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
                p{font-size:1em;margin:0;}

                .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
                </style>

   </head>

   <body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/"><img src="assets/img/logoo.png" alt="" style ="float:left; height: 63px; width: auto; padding: -20px 0; margin: -20px 0;"></a></li>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="about_user">About</a></li>
                                            <li><a href="pengajuan">pengajuan sampah organik</a></li>
                                            <li><a href="transaksi_user">transaksi</a>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li class="nav-right">
                                                <!--Login&Register-->
                                                @if(auth()->user())
                                                  <!-- USER INFO -->
                                                  <li class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #f15f22"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i style="font-size:15px; color:#000"class="lnr lnr-user" >{{auth()->user()->name}}</i> </a>
                                                    <ul class="dropdown-menu" style="background-color: #f15f22">
                                                    <li> <a href="/logout">Logout  </a> </li>
                                                    <li><a href="/daftar-pesanan">Pesanan Saya </a></li>
                                                    <li><a href="/daftar-pengajuan">Pengajuan Penjemputan Sampah</a></li>
                                                    </ul>
                                                  </li>
                                                @else
                                                    <a class="btn btn-default" href="/login">Login</a>

                                                  @endif

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                {{-- <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="/logout" class="btn header-btn">Login</a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Header End -->
    </header>
    <main>

        <div id="wrapshopcart">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                    <div class="heading text-center">
                      <h4>Daftar Pesanan</h4>
                    </div>
                    <div class="row">

                        <table class="table table-sm" >
                            <thead>
                              <tr style="background:#fff;">
                                      <th scope="col">Nama Pelanggan</th>
                                      <th scope="col">Status Pengiriman</th>
                                      <th scope="col">Detail</th>
                                      <th scope="col">Pembayaran</th>
                                      <th scope="col">Nota</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($pesanan as $item)
                                  <tr style="background:#fff;">

                                    <td >{{ $item->name}}</td>
                                    {{-- <td >{{ $item->status_pengiriman}}</td> --}}
                                    <td >
                                    @if($item->status_pengiriman=="Pending")
                                          <a class="btn btn-xs btn-danger">{{ $item->status_pengiriman}}</a>
                                    @elseif ($item->status_pengiriman=="Proses Pengiriman")
                                          <a class="btn btn-xs btn-success">{{ $item->status_pengiriman}}</a>
                                    @else
                                          <a class="btn btn-xs btn-warning">{{ $item->status_pengiriman}}</a>
                                    @endif

                                          </td>
                                          <td ><a class="btn btn-primary" href="/detail-pesanan/{{$item['id']}}">detail</a></td>

                                    <td >
                                        @if($item->status_pengiriman=="Pending")
                                          <a href="/pembayaran/{{$item['id']}}" class="btn btn-xs btn-danger">kirim bukti pembayaran</a>
                                        @else
                                          <a  class="btn btn-xs btn-success">Sudah Kirim pembayaran</a>

                                        @endif
                                    </td>

                                    <td>
                                        @if($item->status_pengiriman=="Proses Pengiriman")
                                        <a href="{{ url('/print/'.$item->id. '/cetak') }}" class="btn btn-secondary btn-sm"> Cetak Nota</a>
                                        @else
                                        <a  class="btn btn-xs btn-success">Cetak Nota</a>
                                        @endif

                                    </td>
                                    @endforeach
                                  </tr>
                                </tbody>
                              </table>



                   </div>
                </div>
            </div>
        </div>


            @section('footer')

    </main>
    <footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- footer Heading -->

                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>COMPANY</h4>
                                <ul>
                                    <li><a href="about_user">About Us</a></li>
                                    <li><a href="pengajuan">Pengajuan Sampah Organik</a></li>
                                    <li><a href="transaksi_user"> Transaksi Maggot</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Jam Operasional Kerja</h4>
                                <ul>
                                    <li>Senin 08.00 - 16.00</li>
                                    <li>Selasa 08.00 - 16.00</li>
                                    <li>Rabu 08.00 - 16.00</li>
                                    <li>Kamis 08.00 - 16.00</li>
                                    <li>Jum'at 08.00 - 16.00</li>
                                    <li>Sabtu 08.00 - 15.00</li>
                                    <li>Minggu 08.00 - 16.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>RESOURCES</h4>
                                <ul>
                                    <li><a href="#">Home Insurance</a></li>
                                    <li><a href="#">Travel Insurance</a></li>
                                    <li><a href="#"> Car Insurance</a></li>
                                    <li><a href="#"> Business Insurance</a></li>
                                    <li><a href="#"> Heal Insurance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">GThe trade war currently ensuing between te US anfd several natxions around thdhe globe, most fiercely with.</p>
                                </div>
                            </div>
                            <!-- Footer Social -->
                            <div class="footer-social ">
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  {{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('logisticexpress-master')}}./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/popper.min.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/wow.min.js"></script>
		<script src="{{ asset('logisticexpress-master')}}./assets/js/animated.headline.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.nice-select.min.js"></script>
		<script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/contact.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.form.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.validate.min.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/mail-script.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('logisticexpress-master')}}./assets/js/plugins.js"></script>
        <script src="{{ asset('logisticexpress-master')}}./assets/js/main.js"></script>

    </body>
</html>
