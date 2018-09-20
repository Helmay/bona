<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 13/07/2018
 * Time: 21.21
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
                                <a href="{{ route('contact') }}"><strong>Contact Us</strong></a>
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
                            <h2>Jasa & Pelayanan</h2>
                            <ul class="page-location">
                                <li><a href="#">Home</a></li>
                                <li>/</li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
@section('content')
    <!--SERVICE AREA-->
    <section class="service-area">
        <div class="service-top-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md- col-lg-6 col-sm-12 col-xs-12">
                        <div class="service-content wow fadeIn">
                            <h2>Pelayanan & Jasa Kami</h2>
                            <p style="text-align:justify">
                                PT.BONA NUSANTARA RAYA SAKTI memberikan layanan mulai dari <strong>Domestic Sea Freight (FCL & LCL),
                                    Land Transportation dan lain lain (Air, Sea & Land).
                                </strong>
                            </p>
                            <p style="text-align:justify">
                                Jaringan PT.BONA NUSANTARA RAYA SAKTI telah menjangkau seluruh wilayah Indonesia.
                            </p>
                            <p style="text-align:justify">
                                PT.BONA NUSANTARA RAYA SAKTI merupakan solusi jasa layanan kargo cepat, kargo murah, 
                                kargo aman dan berkualitas untuk jasa pengiriman barang anda diwilayah Indonesia.
                            </p>
                            <h3><strong>Layanan</strong></h3>
                            <p>
                                Saat ini kami telah melayani pengiriman barang di seluruh wilayah Indonesia mulai dari Sabang sampai dengan Merauke.
                            </p>
                            <ul>
                                <li><i class="fa fa-check"></i> Cargo handling service / door to door - door to port - door to ship</li>
                                <li><i class="fa fa-check"></i> jasa angkutan / trucking</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="service-catalouge-content-area wow fadeIn">
                            <div class="service-catalouge-bg"></div>
                            <div class="row">
                                <img src="{{ asset('carries/img/service/peta_indonesia.jpg') }}" alt="" sizes="100%" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </section>
    <!--SERVICE AREA END-->
@stop
