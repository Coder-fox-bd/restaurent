<?php
$objSTD=new App\Http\Controllers\MenuPageController2();
$Seo=$objSTD->Seo();
?>
@extends('frontend.layout.master')
@section('title','Order Your Menu | ')
@section('seo')
    <meta name="description" content="{{$Seo->online_order_description}}">
    <meta name="keywords" content="{{$Seo->meta}}">
@endsection
@section('content')	
    <div class="sectionWrapper">
        <div class="container">
            <div class="row">
                <!-- cell6  class="proButton modal-trigger" data-modal="modal-name" -->
                <div class="cell-6">
                    <div class="root">
                        <div>
                            <div class="ant-collapse ant-collapse-icon-position-left">
                            
                            </div>
                            <div class="clearfix"></div>
                            <div class="container mt-3 px-0 px-lg-2 ">
                                <section id="detail_view_menu">
                                    <div class="row">
                                        @include('frontend.extra.ros_menu')

                                        @include('frontend.extra.cart',compact($orderINfoText))
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    @if(isset($orderINfoText))
    <div class="modal" id="alergy_alert" style="z-index: 9999;">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="modal-header">
                <div class="close-modal">✖</div> 
                <h4><i class="fa fa-info-circle"></i> Allergy & dietary information</h4>
            </div>
            <div class="modal-body" style="padding:20px 10px 10px 10px;">       
                <div class="cell-12">
                   {!!html_entity_decode($orderINfoText->allergy_alert)!!} 
                </div>               
            </div>
        </div>
    </div>
    @endif
@endsection	





@section('css')
    <link rel="stylesheet" href="{{url('front-theme/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('front-theme/css/radio-button/style.css')}}">
    <style type="text/css">
        .display-none-sec
        {
            display: none !important;
        }

        .discount-space
        {
            display: none;
        }

        .cart-item-highlight
        {
            font-weight: 600;
        }

        .cart-data-mini-box
        {
            width: 100%;
            display: block; 
        }

        .cart-price-mini-box
        {
            display:inline-grid;
            font-weight: 600;
        }
        .cart-price-mini-box > span::before 
        {
            content:"$";
            display:inline-grid;
            font-weight: 600;
        }
        .cart-extra-mini-box
        {
            width: 150px;
            display:inline-grid;
            overflow: hidden;
            font-weight: bold;
        }
    </style>
@endsection

@section('slider-js')
    <script type="text/javascript" src="{{url('front-theme/js/jquery.animateNumber.min.js')}}"></script>
    <script type="text/javascript" src="{{url('front-theme/js/jquery.easypiechart.min.js')}}"></script>

    <script src="{{url('front-theme/js/sweetalert.min.js')}}"></script>
	@include('frontend.extra.cart-js')
    <script type="text/javascript">

        
        $(document).ready(function(){
            $("#mobileCartMenuShort").click(function(){
                $('html, body').animate({
                    scrollTop: $("#mobileCartWeb").offset().top - ($('#mobileCartWeb')[0].scrollHeight-250)
                }, 1000);

                console.log('Position Get : ',$("#mobileCartWeb").offset().top);

            });
        });

        
    </script>
@endsection
