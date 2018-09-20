<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 12/07/2018
 * Time: 16.15
 */
?>
<header class="top-area" id="home">
    <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="header-top-area">
        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="#home" class="navbar-brand"></a>
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
    <!--HOME SLIDER AREA-->
    
    <!--END HOME SLIDER AREA-->
</header>
