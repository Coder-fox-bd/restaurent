<?php
$objSTD=new MenuPageController();
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

    <div id="orderModal" class="modal fade" style="z-index: 9999;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h5>How you want the order?</h5>
                    @if($tab->collection_only==1)
                        <input style="display: none;"  type="radio" value="Delivery" name="record" id="record_1">
                        <label class="cell-5 btn btn-success" style=" text-transform: capitalize; padding-left: 25px;">
                            <input style="position: absolute; margin-top:8px; margin-left: -48px;" type="radio" value="Collect" name="record" id="record_0"> 
                            <span>Only Collection</span>
                        </label>
                    @else
                        <div class="text-center">
                            <label class="cell-5 btn btn-success">
                                <input checked="checked" style="position: absolute; margin-top:8px; margin-left: -17px; " type="radio" value="Delivery" name="record" id="record_1"> 
                                Delivery
                            </label>
                            <label class="cell-5 btn btn-success" style=" text-transform: capitalize; padding-left: 25px;">
                                <input style="position: absolute; margin-top:8px; margin-left: -48px;" type="radio" value="Collect" name="record" id="record_0"> 
                                <span>Collection</span>
                            </label>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div id="pickUp" class="modal fade" style="z-index: 9999;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h5>What time you want to pickup the order?</h5>
                    <input type="text" class="form-control" id="pickUpTime">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection	





@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        /* this will set the toastr style */
        .toast-success {
            background-color: purple;
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#pickUpTime').datetimepicker();
            var addtoCartURL="{{url('order-item/add-to-cart/json')}}";
            $.ajax({
                'async': false,
                'type': "GET",
                'global': false,
                'dataType': 'json',
                'url': addtoCartURL,
                'data': 
                {
                    '_token':"{{csrf_token()}}"
                },
                'success': function (data) {
                    var obj=data;
                    if(obj.rec==null) 
                    {
                        $("#orderModal").modal('show'); 
                        $("input[name=record]").click(function(){
                            var selecVal='';
                            var pickup_time='';
                            if(document.getElementById('record_0').checked==true)
                            {
                                $("#pickUp").modal('show');
                                $("#orderModal").modal('hide');
                                pickup_time = document.getElementById("pickUpTime").value;
                                if(pickup_time!=''){
                                    alert(pickup_time)
                                    selecVal='Collect';
                                }
                            }
                            else if(document.getElementById('record_1').checked==true)
                            {
                                selecVal='Delivery';
                            }
                            if(selecVal!='')
                            {
                                var item_id=selecVal;
                                var addtoCartURL="{{url('order-item/add-to-cart')}}";
                                //------------------------Ajax POS Start-------------------------//
                                $.ajax({
                                    'async': false,
                                    'type': "POST",
                                    'global': false,
                                    'dataType': 'json',
                                    'url': addtoCartURL,
                                    'data': {'rec':item_id,'_token':"{{csrf_token()}}"},
                                    'success': function (data) {
                                        loadCart(data);
                                        $("#orderModal").modal('hide');
                                    }
                                });
                            }
                        });
                    }

                }

            });
        });
    </script>
@endsection
