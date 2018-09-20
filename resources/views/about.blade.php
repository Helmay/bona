<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 13/07/2018
 * Time: 15.16
 */
?>
@extends('layouts.master')

@section('header')
    <header class="top-area single-page" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="{{ asset('carries/img/logo_bona2.png') }}" alt="logo"></a>
                        </div>

                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('profil') }}">Profil</a>
                                </li>
                                <li>
                                    <a href="{{ route('layanan') }}">Layanan</a>
                                </li>
                                <li>
                                    <a href="{{ route('klien') }}">Klien</a>
                                </li>
                                <li>
                                    <a href="{{ route('testimonial') }}">Testimonial</a>
                                </li>
                                <li>
                                    <a href="{{ route('galery') }}">Galery</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="welcome-text text-center">
                            <h2>About Us</h2>
                            <ul class="page-location">
                                <li><a href="#">Home</a></li>
                                <li>/</li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
@section('content')
    <!--ABOUT DETAILS AREA-->
    <section class="about-details-area section-padding wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>about bonanusantara</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <ul class="about-details-menu">
                        <li class="active"><a data-toggle="tab" href="#company">Company Profile</a></li>
                        <li><a data-toggle="tab" href="#history">Our History</a></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="tab-content about-details-content">
                        <div id="company" class="about-company tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <h3>PT.BONA NUSANTARA RAYA SAKTI - Indonesia</h3>
                                        <p style="text-align: justify">
                                            PT.BONA NUSANTARA RAYA SAKTI adalah perusahaan yang bergerak dibidang jasa
                                            pengiriman barang (ekspedisi) untuk antar kota ataupun antar pulau yang
                                            melalui jalur darat ataupun laut.
                                        </p>
                                        <p style="text-align: justify">
                                            Dengan komitmen tinggi, PT.BONA NUSANTARA RAYA SAKTI berusaha membantu klien
                                            untuk menjalankan bisnis mereka secara efektif & efisien dengan memberikan
                                            harga yang kompetitif, yang dapat membantu meningkatkan pendapatan bisnis mereka.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <img src="{{ asset('carries/img/about/about-cargo.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <p>
                                            Perusahaan dengan klien perusahaan-perusahaan besar ini dipimpin dengan tenaga
                                            berpengalaman & profesional dalam bidangnya, sebagai penyedia jasa angkutan
                                            dan pengiriman barang yang telah melalui berbagai macam rintangan bisnis,
                                            selama lebih dari 20 tahun berkecimpung di dalam perekonomian Indonesia.
                                        </p>
                                        <p>
                                            PT.BONA NUSANTARA RAYA SAKTI memberikan layanan mulai dari <strong>Domestic Sea
                                                Freight (FCL & LCL), Land Transportation dan lain-lain ( Air, Sea & Land)</strong>.
                                        </p>
                                        <p>
                                            Saat ini jaringan PT.BONA NUSANTARA RAYA SAKTI telah menjangkau seluruh
                                            wilayah Indonesia mulai dari Sabang sampai dengan Merauke. Dan telah
                                            melakukan kerjasama tidak hanya dengan perusahaan - perusahaan besar yang
                                            ada di Indonesia tetapi juga telah melakukan kerjasama regional dengan Malaysia,
                                            Singapura dan Thailand.
                                        </p>
                                        <p>
                                            Jadi, tidak diragukan lagi PT. BONA NUSANTARA RAYA SAKTI merupakan solusi
                                            layanan kargo cepat, kargo murah, kargo aman dan berkualitas di seluruh Indonesia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <h3>Our Mission</h3>
                                        <p style="text-align: justify;">
                                            "Dengan Komitmen Tinggi, PT.BONA NUSANTARA RAYA SAKTI berusaha membantu klien
                                            untuk menjalankan bisnis mereka secara efektif & efisien dengan memberikan harga
                                            yang kompetitif, yang dapat membantu meningkatkan pendapatan bisnis mereka."
                                        </p>


                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="about-hisperusahaan jasas tory-content">
                                        <img src="{{ asset('carries/img/blog/blog_5.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <h3>Our Vision</h3>
                                        <p>
                                            "Menjadi perusahaan jasa pengangkutan dengan kualitas terbaik, aman dan
                                            terpercaya dengan membantu mengembangkan dan memudahkan sistem logistik perusahaan
                                            di Indonesia."
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                                <div class="about-history-content">
                                    <p style="text-align: justify">
                                        <strong>PT.BONA NUSANTARA RAYA SAKTI</strong> didukung dengan tenaga kerja yang telah berpengalaman
                                        & profesional dalam bidangnya sebagai penyedia jasa angkutan dan pengiriman
                                        barang. selama lebih dari 20 tahun berkecimpung di dunia perekonomian Indonesia
                                        PT.BONA NUSANTARA RAYA SAKTI telah melalui berbagai macam rintangan bisnis hingga
                                        yang terjadinya krisis moneter yang terjadi di Indonesia pada tahun 1997 - 1998.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="history" class="company-history tab-pane fade">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <h3>Sejarah Berdirinya Usaha</h3>
                                        <p style="text-align: justify">
                                            PT. BONA NUSANTARA RAYA SAKTI merupakan perusahaan yang bergerak di bidang jasa
                                             angkutan barang ( ekspedisi ) antar kota ataupun antar pulau melalui jalur
                                            darat ataupun laut.
                                        </p>
                                        <p style="text-align: justify">
                                            Perusahaan ini didirikan oleh H.Azrai Hasibuan pada tahun 1990. Dalam Perjalanan
                                            bisnis usahanya tersebut, H.Azrai Hasibuan kemudian melakukan kerja sama dengan
                                            H.Gozali Nasution untuk meningkatkan kinerja perusahaannya. Bermodalkan pengalaman
                                            tempat mereka bekerja terdahulu, H.Azrai Hasibuan dan H.Gozali Nasution mampu
                                            membawa PT. Bona NUSANTARA RAYA SAKTI melewati berbagai macam rintangan bisnis.
                                            salah satunya adalah krisis moneter yang terjadi pada tahun 1997-1998.
                                        </p>
                                        <p style="text-align: justify">
                                            Kini setelah 20 tahun berdiri, PT. BONA NUSANTARA RAYA SAKTI menyediakan jasa
                                            CARGO. MOVING, TRUCKING & PACKING ke seluruh wilayah Indonesia.
                                        </p>
                                        <p style="text-align: justify">
                                            PT. BONA NUSANTARA RAYA SAKTI memberikan JAMINAN KEAMANAN, KECEPATAN DAN KETEPATAN
                                            dalam pelayanan serta HARGA yang terjangkau dan KOMPETITIF karena dukungan
                                            jaringan yang luas di seluruh Indonesia.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <img src="{{ asset('carries/img/reports/2015.jpg') }}" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT DETAILS AREA END-->
@stop
