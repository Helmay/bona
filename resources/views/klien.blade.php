<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 14/07/2018
 * Time: 01.21
 */
?>
@extends('layouts.master')

@section('content')
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
                                    <a href="{{ url('/') }}"><strong>Home</strong></a>
                                </li>
                                <li>
                                    <a href="{{ route('layanan') }}"><strong>Services</strong></a>
                                </li>
                                <li>
                                    <a href="{{ route('klien') }}"><strong>Client</strong></a>
                                </li>
                                <li>
                                    <a href="{{ route('testimonial') }}"><strong>Testimonial</strong></a>
                                </li>
                                <li>
                                    <a href="{{ route('galery') }}"><strong>Galery</strong></a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}"><strong>Contact Us</strong></a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}"><strong>About Us</strong></a>
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
                            <h2>Client</h2>
                            <ul class="page-location">
                                <li><a href="#">Home</a></li>
                                <li>/</li>
                                <li><a href="#">Client</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="service-area-two section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Client PT.Bona Nusantara</h2>
                        <p>
                            Saat ini kami telah melakukan kerjasama dengan berbagai perusahaan besar ataupun 
                            yang sedang berkembang yang ada di negara Indonesia serta negara lain seperti 
                            Malaysia,Singapura, dan Thailand.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-icon-three"><i class="fa fa-truck"></i></div>
                        <h4>SINARMAS GROUP</h4>
                        <p>
                            Salah satu grup terbesar dan terpercaya,
                            yang bidang bisnisnya meliputi berbagai sektor sentra ekonomi di Indonesia. 
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon-three"><i class="fa fa-plane"></i></div>
                        <h4>PT.MINAMAS GROUP</h4>
                        <p>
                            Bergerak dibidang agrobisnis/ perkebunan kelapa sawit 
                            tersebar didaerah Sumatera Kalimantan dan Sulawesi.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-icon-three"><i class="fa fa-ship"></i></div>
                        <h4>PT.SALIM IVOMAS PRATAMA</h4>
                        <p>
                            Perusahaan yang tergabung dalam Indofood Group, bergerak 
                            dalam bidang Agribisnis berupa perkebunan dan pabrik 
                            pengolahan kelapa sawit yang berlokasi di Sumatera & Kalimantan.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-icon-three"><i class="fa fa-dropbox"></i></div>
                        <h4>PT.SMART Tbk</h4>
                        <p>
                            salah satu anak perusahaan group 
                            Sinar Mas yang bergerak di bidang agriculture
                        </p>
                        <br><br><br>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon-three"><i class="fa fa-cog"></i></div>
                        <h4>PT.COMMODITIES & ENERGY RESOURCES</h4>
                        <p>
                            suatu grup pedagang internasional yang secara individu 
                            telah mempunyai pengalaman hampir lebih dari seperempat abad lamanya.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-icon-three"><i class="fa fa-bicycle"></i></div>
                        <h4>PT.LANGGENG MUARA MAKMUR</h4>
                        <p>salah satu parusahan yang bergerak di bidang komoditi kelapa sawit </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h3>GROUP PT.BONA NUSANTARA</h3>
                        <p>Saat ini PT.Bona Nusantara Raya Sakti sedang mengembangkan sebuah GROUP bisnis untuk memenuhi kebutuhan dari klien
                            mereka. Berikut ini adalah bentuk usaha yang sedang dikembangkan saat ini:
                        </p>
                    </div>    
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <h4>PT.BONA NUSANTARA RAYA SAKTI</h4>
                        <p>Bergerak di bidang jasa angkutan barang (ekspedisi)</p>    
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <h4>PT.TANIKAYA MULTI SARANA</h4>
                        <p>Bergerak di bidang Mechanical, Electrical, Fabricator, Contactor dan Trading.</p>    
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <h4>AVENUE8 STUDIIO</h4>
                        <p>Bergerak di bidang jasa pembuatan aplikasi komputer, website dan design untuk turun cetak.</p>    
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    Denga Komitmen Kerja dan upaya untuk selalu memberikan pelayanan terbaik. PT.Bona Nusantara Raya Sakti berharap dapat 
                    memenuhi segala kebutuhan dan kepuasan para kliennya.
                </div>
            </div>    
        </div>
    </section>
@stop