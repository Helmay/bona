<?php
/**
 * Created by PhpStorm.
 * User: Helmay
 * Date: 12/07/2018
 * Time: 16.17
 */
?>
@extends('layouts.master')

@include('include.header')

@section('section_about')

    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-left-content-area wow fadeIn">
                        <img src="{{ asset('carries/img/about/1x.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>PT Bona Nusantara Raya Sakti</h2>
                            <p>
                                PT.BONA NUSANTARA RAYA SAKTI adalah perusahaan yang bergerak dibidang jasa (ekspedisi) untuk antar kota ataupun antar pulau melalui jalur darat maupun laut.
                            </p>
                            <a href="{{ route('about') }}">read more <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="about-count">
                            <div class="single-about-count">
                                <h4><i class="fa fa-suitcase"></i> 120</h4>
                                <p>Project Done</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-thumbs-o-up"></i> 100</h4>
                                <p>Project Done</p>
                            </div>
                            <div class="single-about-count">
                                <h4><i class="fa fa-users"></i> 30</h4>
                                <p>Project Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('section_service')
    <section class="service-area-three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Service</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-icon-three"><i class="fa fa-truck"></i></div>
                        <h4>road freight</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, lorem Ipsu.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon-three"><i class="fa fa-plane"></i></div>
                        <h4>air freight</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, lorem Ipsu.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-icon-three"><i class="fa fa-ship"></i></div>
                        <h4>sea freight</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, lorem Ipsu.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-icon-three"><i class="fa fa-dropbox"></i></div>
                        <h4>ware house</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, lorem Ipsu.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-icon-three"><i class="fa fa-cog"></i></div>
                        <h4>consulting</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, lorem Ipsu.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-icon-three"><i class="fa fa-bicycle"></i></div>
                        <h4>fast delevary</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, lorem Ipsu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop