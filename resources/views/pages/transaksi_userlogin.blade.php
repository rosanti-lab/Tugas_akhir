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
                                            <li><a href="/"><img src="assets/img/logo-pertamina.png" alt="" style ="float:left; height: 63px; width: auto; padding: 11px 0; margin: -14px 0;"></a></li>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="about_user">About</a></li>
                                            <li><a href="pengajuan">pengajuan sampah organik</a></li>
                                            <li><a href="transaksi_user">transaksi</a>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            {{-- <li><a href="contact.html">Akun Saya</a></li> --}}
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->

                                <div class="col-sm-5">
                                    <div class="user-area dropdown float-right">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg') }}" alt="" style="width: 10%">
                                        </a>
                                        <div class="user-menu dropdown-menu">
                                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                                            <a class="nav-link" href="/logout"><i class="fa fa-power -off" style button colorlib: #000;></i>Logout</a>
                                        </div>
                                    </div>
                                </div>





                                {{-- <div class="header-right-btn d-none d-lg-block ml-10">
                                    <select class="form-control kurir" name="jasa_pengiriman">
                                        <option value="0">Akun Saya</option>
                                        <option><a class="nav-link" href="/logout"><i class="fa fa-power -off"></i>Logout</a></option>
                                        <option value="j&t">Riwayat Transaksi</option>
                                        <option value="sicepat">Status Transaksi</option>
                                    </select>
                                    
                                    {{-- <a href="/logout" class="btn header-btn">Akun Saya</a> --}}
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
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/maggot4.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Transaksi Maggot</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item"><a href="pengajuan">Transaksi</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <div class="section-tittle mb-35">
                                <span>Budidaya Maggot Wiralodra</span>
                                <h2>Langkah & Cara Melakukan Pembelian</h2>
                                @foreach($transaksi as $tran)
                                    {{ $tran['konten'] }}
                                @endforeach
                            </div>
                            <a href="form_transaksi" class="btn">klik disini untuk </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        @foreach($transaksi as $tran)
                                    {{ $tran['konten'] }}
                                @endforeach
                    </div>

                </div>
            </div>
        </div>

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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
