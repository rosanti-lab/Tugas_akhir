<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bubidaya Maggot Wiralodra </title>
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
                                            <li><a href="/"><img src="assets/img/logoo.png" alt="" style ="float:left; height: 63px; width: auto; padding: -20px 0; margin: -20px 0;"></a></li>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="about_user">About</a></li>
                                            <li><a href="pengajuan">pengajuan sampah organik</a></li>
                                            <li><a href="transaksi_user">transaksi</a></li>
                                            <li><a href="{{ url('carts')}}">Cart</a></li>
                                            <li><i class="zmdi zmdi-shopping-cart"></i><a href="contact">Contact</a></li>
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
                                    <a href="/logout" class="btn header-btn">Logout</a>
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
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1 >Budidaya maggot Wiralodra <span>Mitra Binaan Tim CSR Pertamina RU VI Balongan</span></h1>
                            </div>
                            <!--Hero form -->
                            <!-- <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Your Tracking ID">
                                </div>
                                <div class="search-form">
                                    <a href="#">Track & Trace</a>
                                </div>
                            </form>
                            <!-- Hero Pera -->
                            <!-- <div class="hero-pera">
                                <p>For order status inquiry</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->


    <!-- our info End -->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h1>Welcome to Bubidaya Maggot Wiralodra </h1>
                        <h2>...</h2>
                        @foreach ($profil as $key => $value)


                                        {{-- <h5><a href="">{{$value->judul}} </a></h5> --}}

                                        <p>
                                            {{$value->konten}}
                                        </p>

                        @endforeach

                        {{-- <span><p style="font-size:15px; font-style:bold;">{{$profil[0]->konten}}</p><span> --}}
                    </div>
                </div>
            </div>

            {{-- <section class="tiles">
								<article class="style1">

								</article>
								<article class="style2">

								</article>
								<!-- <article class="style3">

								</article> -->
							</section> --}}

            <div class="row">
{{-- @foreach ($profil as $key => $value)
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-cat text-center mb-50">
        <div class="cat-cap">

            <h5><a href="services.html">{{$value->judul}} </a></h5>

            <p>
                {{$value->konten}}
            </p>
        </div>
    </div>
</div>

@endforeach --}}

                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-ship"></span>
                        </div>
                        {{-- <div class="cat-cap">
                            {{-- <h5><a href="services.html">Ship Transport</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p> --}}
                        {{-- </div> --}}
                    {{-- </div> -
                </div> --}}
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-plane"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Air Transport</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? About Area Start -->
    <!-- <div class="about-low-area padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        Section Tittle -->
                        <!-- <div class="section-tittle mb-35">
                            <span>About Our Company</span>
                            <h2>Safe Logistic & Transport  Solutions That Saves our Valuable Time!</h2>
                        </div>
                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                        <p>Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                        <a href="about.html" class="btn">More About Us</a>
                    </div> -->
                <!-- </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <!-- <div class="about-img ">
                        <div class="about-font-img">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img d-none d-lg-block">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About Area End -->
    <!--? contact-form start -->

    <!-- contact-form end -->
    <!--Team Ara Start -->
    <!-- <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    Section Tittle
                    <div class="section-tittle text-center mb-70">
                        <span>Our Team Mambers</span>
                        <h2>What We Can Do For You</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                Blog Social
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <!-- <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div> -->
                            <!-- </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <!-- <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->
            <!-- </div> -->
        <!-- </div>
    </div> - -->
    <!-- Team Ara End -->
    <!--? Testimonial Start -->
    <!-- <div class="testimonial-area testimonial-padding section-bg" data-background="assets/img/gallery/section_bg04.jpg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <!-- <div class="section-tittle section-tittle2 mb-25">
                        <span>Clients Testimonials</span>
                        <h2>What Our Clients Say!</h2>
                    </div>  -->
                    <!-- <div class="h1-testimonial-active mb-70">
                        <!-- Single Testimonial -->
                        <!-- <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <!-- <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div> -->
                                <!-- founder -->
                                <!-- <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div> -->
                            <!-- </div>
                        </div> -->
                        <!-- Single Testimonial -->
                        <!-- <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <!-- <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <!-- <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jhaon smith</span>
                                        <p>Creative designer</p>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- Testimonial End -->
    <!--? Blog Area Start -->

    <!-- Blog Area End -->
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
                                {{-- <h4>COMPANY</h4>
                                <ul>
                                    <li><a href="about_user">About Us</a></li>
                                    <li><a href="pengajuan">Pengajuan Sampah Organik</a></li>
                                    <li><a href="transaksi_user"> Transaksi Maggot</a></li>
                                    <li><a href="#"> Privacy Policy</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>MAGGOT WIRALODRA</h4>
                                <ul>
                                    <li><a href="">Home</a></li>
                                    <li><a href="about_user">About Us</a></li>
                                    <li><a href="pengajuan">Pengajuan Sampah Organik</a></li>
                                    <li><a href="transaksi_user"> Transaksi Maggot</a></li>
                                    <li><a href="#"> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            {{-- <div class="footer-tittle">
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
                            </div> --}}
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
