<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 14/07/2018
 * Time: 09.08
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
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="contact-area" id="contact">
    <div class="contact-form-area section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h3>Kontak Kami</h3>
                        <p>
                            Hubungi kami untuk pertanyaan seputar produk, layanan, maupun pengalaman TANIKAYA sebagai penyedia alat dan mesin pertanian, perkebunan, peternakan, perikanan, dan industri kecil dan menengah.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <form action="{{ url('contact') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-input">
                                            <input type="email" class="form-control" name="email" placeholder="Email.." required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-input">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject..">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-input">
                                            <textarea class="form-control" rows="6" name="message" placeholder="Your Message Here..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-danger">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="contact-image">
                        <div class="contact-address">
                            <h4>Address</h4>
                            <p><i class="fa fa-phone"></i> Phone: <a href="callto:01744430440">+88-01744-430-440</a></p>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:backpiper.com@gmail.com">backpiper.com@gmail.com</a></p>
                            <address><i class="fa fa-map-marker"></i>
                                Office  :  29 road, Sec-08, Uttara-1204, Dhaka, Bangladesh.
                            </address>
                        </div>
                        <div class="social-bookmark">
                            <h4>Follow Us </h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map-area relative">
        <div id="map" style="width: 100%; height: 400px;"> </div>
    </div>
</section>
@stop