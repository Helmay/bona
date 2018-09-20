<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 13/07/2018
 * Time: 15.18
 */
?>
<!--START TOP AREA-->
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
                                <a href="{{ route('layanan') }}">Services</a>
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
<!--END TOP AREA-->
