<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>ArsipKita</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url('assets/landing-page/images/favicon.png') ?>" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/animate.css') ?>">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/magnific-popup.css') ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/slick.css') ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/LineIcons.css') ?>">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/font-awesome.min.css') ?>">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/bootstrap.min.css') ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/default.css') ?>">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/landing-page/css/style.css') ?>">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <img style="    width: 150px;float: left;" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">

                        </nav> <!-- navbar -->

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/landing-page/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Aplikasi Praktikum</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Manajemen Kearsipan Digital</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Arsip Kita Merupakan Aplikasi Praktikum Berbasis Website Pada Mata Kuliah Manajemen Kerarsipan Digital Fakultas Manajemen Univeristas Negeri Malang </p>
                            <a href="<?php echo base_url('auth/daftar') ?>" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Daftar Sekarang</a>
                            <a href="<?php echo base_url('auth/login') ?>" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Login</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="<?= base_url('assets/landing-page/images/header-hero.png') ?>" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    <!--====== SERVICES PART START ======-->

    <!-- <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">ArsipKita <span> merupakan web praktikum yang dikembangkan oleh Prodi S1
                                Pendidikan Administrasi Perkantoran, Universitas Negeri Malang</span></h3>
                    </div> <!-- section title -->
    </div>
    </div> <!-- row -->

    </div> <!-- container -->
    </section> -->

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <!-- <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Quick & Easy <span>to Use Bootstrap Template</span></h3>
                        </div> 
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                        <a href="#" class="main-btn">Try it Free</a>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="<?= base_url('assets/landing-page/images/about1.svg') ?>" alt="about">
                    </div> 
                </div>
            </div> 
        </div> 
        <div class="about-shape-1">
            <img src="<?= base_url('assets/landing-page/images/about-shape-1.svg') ?>" alt="shape">
        </div>
    </section> -->

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <!-- <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="<?= base_url('assets/landing-page/images/about-shape-2.svg') ?>" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Modern design <span> with Essential Features</span></h3>
                        </div> 
                        <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                        <a href="#" class="main-btn">Try it Free</a>
                    </div> 
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="<?= base_url('assets/landing-page/images/about2.svg') ?>" alt="about">
                    </div> 
                </div>
            </div> 
        </div> 
    </section> -->


    <!--====== ABOUT PART START ======-->

    <!-- <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Crafted for</span> SaaS, App and Software Landing Page</h3>
                        </div> 
    <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
        accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
        est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
    <a href="#" class="main-btn">Try it Free</a>
    </div>
    </div>
    <div class="col-lg-6">
        <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?= base_url('assets/landing-page/images/about3.svg') ?>" alt="about">
        </div>
    </div>
    </div>

    </div>

    <div class="about-shape-1">
        <img src="<?= base_url('assets/landing-page/images/about-shape-1.svg') ?>" alt="shape">
    </div>
    </section> -->

    <!--====== ABOUT PART ENDS ======-->


    <!--====== ABOUT PART ENDS ======-->

    <!--====== VIDEO COUNTER PART START ======-->

    <!-- <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="<?= base_url('assets/landing-page/images/dots.svg') ?>" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="<?= base_url('assets/landing-page/images/video.png') ?>" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni-play"></i></a>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">Cool facts <span> this about app</span></h3>
                            </div> 
                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div> 
                        <div class="row no-gutters">
                            <div class="col-4">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">125</span>K</span>
                                        <p class="text">Downloads</p>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">87</span>K</span>
                                        <p class="text">Active Users</p>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">4.8</span></span>
                                        <p class="text">User Rating</p>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </section> -->

    <!--====== VIDEO COUNTER PART ENDS ======-->

    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Pengembang Aplikasi</span> </h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="<?= base_url('assets/landing-page/images/team-22.png') ?>" alt="Team">
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">Andi Basuki, S.Pd., M.Pd.</a></h5>
                            <a href="#">andi.basuki.fe@um.ac.id</a>
                            <p class="text">LECTURER IN S1 MANAGEMENT</p>
                        </div>
                    </div> <!-- single team -->


                </div> <!-- row -->
            </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <!-- <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Users sharing<span> their experience</span></h3>
                    </div> 
                </div>
            </div> 
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod
                                tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam
                                nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url('assets/landing-page/images/textimonial-shape.svg') ?>" alt="shape">
                                <img class="author" src="<?= base_url('assets/landing-page/images/author-1.png') ?>" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Jenny Deo</h6>
                                <p class="text">CEO, SpaceX</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod
                                tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam
                                nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url('assets/landing-page/images/textimonial-shape.svg') ?>" alt="shape">
                                <img class="author" src="<?= base_url('assets/landing-page/images/author-2.png') ?>" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Marjin Otte</h6>
                                <p class="text">UX Specialist, Yoast</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod
                                tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam
                                nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url('assets/landing-page/images/textimonial-shape.svg') ?>" alt="shape">
                                <img class="author" src="<?= base_url('assets/landing-page/images/author-3.png') ?>" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">David Smith</h6>
                                <p class="text">CTO, Alphabet</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod
                                tempor invidunt labore.Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam
                                nonu.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url('assets/landing-page/images/textimonial-shape.svg') ?>" alt="shape">
                                <img class="author" src="<?= base_url('assets/landing-page/images/author-2.png') ?>" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Fajar Siddiq</h6>
                                <p class="text">COO, MakerFlix</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section> -->

    <!--====== TESTIMONIAL PART ENDS ======-->



    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <!-- <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="<?= base_url('assets/landing-page/images/logo.svg') ?>" alt="logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> 
            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="footer-title">
                    <h4 class="title">Resources</h4>
                </div>
                <ul class="link">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div> 
        </div> 
        </div>
        <div class="col-lg-3 col-md-5 col-sm-5">
            <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                    <h4 class="title">Contact Us</h4>
                </div>
                <ul class="contact">
                    <li>+809272561823</li>
                    <li>info@gmail.com</li>
                    <li>www.yourweb.com</li>
                    <li>123 Stree New York City , United <br> States Of America 750.</li>
                </ul>
            </div> 
        </div>
        </div> 
        </div> -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text mt-4">Designed and Developed by <a href="https://uideck.com" rel="nofollow"> Pands Progamming </a></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="<?= base_url('assets/landing-page/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('assets/landing-page/js/vendor/modernizr-3.7.1.min.js') ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url('assets/landing-page/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/landing-page/js/bootstrap.min.js') ?>"></script>

    <!--====== Plugins js ======-->
    <script src="<?= base_url('assets/landing-page/js/plugins.js') ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url('assets/landing-page/js/slick.min.js') ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url('assets/landing-page/js/ajax-contact.js') ?>"></script>

    <!--====== Counter Up js ======-->
    <script src="<?= base_url('assets/landing-page/js/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/landing-page/js/jquery.counterup.min.js') ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url('assets/landing-page/js/jquery.magnific-popup.min.js') ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url('assets/landing-page/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/landing-page/js/scrolling-nav.js') ?>"></script>

    <!--====== wow js ======-->
    <script src="<?= base_url('assets/landing-page/js/wow.min.js') ?>"></script>

    <!--====== Particles js ======-->
    <script src="<?= base_url('assets/landing-page/js/particles.min.js') ?>"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url('assets/landing-page/js/main.js') ?>"></script>

</body>

</html>