                <style type="text/css">
                    .cart-data-logo
                    {
                        height: 25px !important;
                    }
                    .item-display{ margin: 5px 10px;  }
                    .tab_right_header .cart_item{  margin: 4px 10px !important; }
                    .tab_right_header{ height: 46px !important;  }  
                    .mini-cart-total{ padding: 0 10px 6px 10px !important;  }
                    .mini-cart .checkout{ padding-top: 6px !important; }
                    .tab_right_sidebar{ padding-bottom: 6px !important;  }


                    /* width */
                    .mini-cart-list::-webkit-scrollbar {
                        width: 5px;
                    }

                    /* Track */
                    .mini-cart-list::-webkit-scrollbar-track {
                        background: #f1f1f1; 
                    }
                     
                    /* Handle */
                    .mini-cart-list::-webkit-scrollbar-thumb {
                        background: #888; 
                    }

                    /* Handle on hover */
                    .mini-cart-list::-webkit-scrollbar-thumb:hover {
                        background: #e7512f; 
                    }

                    .mini-cart .checkout a
                    {
                        padding: 0 10px;
                    }
                </style>


                <!-- cell9 -->
                <div class="cell-3" id="mobileCartWeb">
                    <div class="tab_right_sidebar" id="mini_page_shopping_cart">
                        <div class="tab_right_header">
                            <div class="pull-left cart-logo-pure">
                                <img  class="cart-data-logo" src="{{url('front-theme/images/cart-icon.png')}}">
                            </div>
                            <div class="pull-left cart">
                                <span class="pull-left item-display">Your Selected items</span>
                                <span class="cart_item mini_shopping-cart-quantity pull-left text-center" style="display: inline; border-radius: 5px;">0</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="padd-top-10"></div>
                        <div class="mini-cart">
                            <style type="text/css">
                                
                            </style>
                            <ul class="mini-cart-list">
                                                           
                            </ul>
                            <div class="mini-cart-totalss clearfix rec_place" style="padding-bottom: 5px !important;">
                                
                                @if($tab->collection_only==1)
                                    <input style="display: none;"  type="radio" value="Delivery" name="rec" id="rec_1"> 
                                    <label class="cell-8 btn btn-danger" style="margin-right: 20px; margin-left: 10px;  text-transform: capitalize; ">
                                        <input  checked="checked" readonly="readonly" style="position: absolute; margin-top:8px; margin-left: -78px;" type="radio" value="Collect" name="rec" id="rec_0"> 
                                        <span> Only Collection</span>
                                    </label>

                                @else

                                    <label class="cell-5 btn btn-danger" style="margin-right: 20px; margin-left: 10px; text-transform: capitalize;">
                                        <input checked="checked" style="position: absolute; margin-top:8px; margin-left: -17px; "  type="radio" value="Delivery" name="rec" id="rec_1"> 
                                        Delivery
                                    </label>
                                    <label class="cell-5 btn btn-danger" style=" text-transform: capitalize; padding-left: 25px;">
                                        <input style="position: absolute; margin-top:8px; margin-left: -48px;" type="radio" value="Collect" name="rec" id="rec_0"> 
                                        <span>Collection</span>
                                    </label>

                                @endif
                                
                                
                            </div>
                            <div class="mini-cart-total">
                                <div class="clearfix">
                                    <div class="left">Sub-Total:</div>
                                    <div class="right mini_cart-subtotal">£<span>230.00</span></div>
                                </div>
                                @if(isset($common))
                                    <div  data-disamount-type="{{$common->discount_option}}"  class="clearfix spend-discount" data-disamount-limit="{{$common->minimum_amount}}" data-discount="{{$common->discount_amount}}">
                                        @if(!empty($common->message))
                                            <div class="restaurantOffers">
                                                <p>{{$common->message}}</p>
                                            </div>
                                        @endif
                                    </div>
                                @elseif(isset($colndel))
                                    @foreach($colndel as $cnd)

                                        <div data-disamount-type="{{$cnd->discount_option}}" class="clearfix spend-discount-colndel spx-{{$cnd->discount_option}}" data-disamount-limit="{{$cnd->minimum_amount}}" data-discount="{{$cnd->discount_amount}}">
                                            @if(!empty($cnd->message))
                                            <div class="restaurantOffers">
                                                <p>{{$cnd->message}}</p>
                                            </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @endif

                                @if(isset($tax))
                                    <div class="clearfix tax-space">
                                        <div class="left">Tax (<span data-type="1">{{$tax->tax_amount}}</span>):</div>
                                        <div class="right">£<span>0.00</span></div>
                                    </div>
                                @endif

                                <div class="clearfix extradeliverycharge-space">
                                    <div class="left">Extra Charge <span></span>:</div>
                                    <div class="right">£<span>0.00</span></div>
                                </div>

                                <div class="clearfix discount-space">
                                    <div class="left">Discount <span></span>:</div>
                                    <div class="right">£<span>0.00</span></div>
                                </div>
                                <div class="clearfix">
                                </div>
                                <div class="clearfix">
                                    <div class="left">Total:</div>
                                    <div class="right total-cart-check-price">£<span>200.20</span></div>
                                </div>
                            </div>
                            @if ($orderINfoText->isoffline==0)
                            <div class="checkout">
                                <a class="btn empty-cart" href="javascript:void(0);">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    Empty Cart</a>
                                <a class="btn checkout-page" href="javascript:void(0);">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Checkout 
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>  
                <!-- cell3 -->

                <div class="col col-12 col-lg-4 px-3 p-lg-0 mb-3">
                    <div style="position: sticky; top: 10px;">
                        <div name="cart-basket-navigate">
                            <section id="cart-Basket" class="basket-order-view my-3 p-3 p-lg-3 link-background">
                                <div class="row">
                                <div class="inner center col-md-12 text-center mb-15 border-bottom">
                                    <a href="javascript:;" class="top10 green-color change-address block text-center">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i> Search Postcode								</a>
                                    
                                    <p class="deliverd has-success" style="color: green;font-weight: bold;"></p>
                                    <p class="not-deliverd has-danger"></p>
                                </div>
                            </div>
                            
                            
                            <div class="cart-cont" id="style-4">
                                <span class="append_cart_item">		
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3><span>Your Basket</span></h3>
                                        </div>
                                        <div class="empty_cart">Your cart is empty</div>
                                    </div>
                                </span>
                            </div>
                                
                            <br>
                            
                            <!-- Button trigger modal -->
                            <a class="allergy" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Do you have an allergy or other dietary requirement?
                            </a>
                            </section>
                        </div>
                    </div>
                </div>

               









                <div class="col col-12 col-lg-4 px-3 p-lg-0 mb-3">
                    <div style="position: sticky; top: 10px;">
                        <div name="cart-basket-navigate">
                            <section id="cart-Basket" class="basket-order-view my-3 p-3 p-lg-3 link-background">
                                <div class="row">
                                <div class="inner center col-md-12 text-center mb-15 border-bottom">                                    
                                    <a href="javascript:;" class="top10 green-color change-address block text-center">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i> Search Postcode								</a>
                                    
                                    <p class="deliverd has-success" style="color: green;font-weight: bold;"></p>
                                    <p class="not-deliverd has-danger"></p>
                                </div>
                            </div>
                            
                            
                            <div class="cart-cont" id="style-4">
                                <span class="append_cart_item">
    
    
    <form action="https://coriandermanchester.co.uk/central-chorlton/checkout" class="checkout" id="checkout" method="post" accept-charset="utf-8">
            
            <input type="hidden" name="cart" id="cart" value="38">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!--<h3><span>Delivery Options</span></h3>-->
                </div>
                <div class="col-md-12 row">
                                    <div class="col-md-6 col-sm-3 col-xs-3">
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input chk_type" value="1" name="order_type" id="order_type_1">
                            <label class="custom-control-label" for="order_type_1">Collection <i class="fa fa-shopping-bag" aria-hidden="true"></i></label>
                        </div>
                    </div>
                                    <div class="col-md-6 col-sm-3 col-xs-3">
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input chk_type" value="2" name="order_type" id="order_type_2" checked="">
                            <label class="custom-control-label" for="order_type_2">Delivery <i class="fa fa-motorcycle" aria-hidden="true"></i></label>
                        </div>
                    </div>
                                    </div>
                
            </div>
        
    
    
    
    <div class="row">
            <div class="col-md-10">
            <h3><span>Your Basket</span></h3>
        </div>
        
        
    
        <div class="col-md-2 clear-cart-ico">
           <a href="javascript:void(0)" data-id="" data-cart="38" class="delete_item_cart"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </div>
    </div>
    
    <hr class="my-2">
    
    
                            
     <div class="scrollbar basket-order-items basket-quick-checkout" id="cart-items">
                 <div class="items-in-basket my-2 mb-3 border-0">
                <div class="row">
                    <div class="col-md-6">
                      <p class="title-menu">1 x CHICKEN Korma </p>
                    </div>
                    <div class="col-md-3 text-right p-0">
                        <div class="product__details__quantity">
                            <!--<span class="del_item"><a href="javascript:void(0)" data-id="" data-cart="" class="delete_item_cart"><i class="fa fa-trash-o" aria-hidden="true"></i></a></span>-->
                            <div class="quantity">
                                <div class="pro-qty-cart product_qty_hgt">
                                                                    <span class="product_count_item number-qty-decr  qtybtn delete_item_cart" type="main_item" data-id="72f3754880f31" data-cart="38">-</span>
                                    
                                    <input class="product_count_item number-qty" id="main_item_qty_72f3754880f31" type="text" value="1" min="1" max="10" name="main_item_qty" onkeypress="return isNumber(event)">
                                    
                                    <span class="product_count_item number-qty-incrs  qtybtn update_item_cart" type="main_item" data-id="72f3754880f31" data-cart="38">+</span>
                                    
                                </div>
                                <!--<span class="update_item"><a href="javascript:void(0)" data-id="72f3754880f31" data-cart="38" class="update_item_cart" title="Update Cart"><i class="fa fa-refresh" aria-hidden="true"></i></a></span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <p class="menu-price">£8.90</p>
                    </div>
                    
                    
                    
                </div>
                            
                            
                            
                            
            </div>
              </div>
                                        <section class="basket-order-view p-0 p-lg-0 link-background quick_checkout_flow" id="basket-view-order-reciept">
                                            <hr class="my-2">
                                            <div class="collapse show">
                                                <div class="row">
                                                <div class="col-5 text-left px-0">
                                                    <p>
                                                    <span>Sub Total</span>
                                                    </p>
                                                </div>
                                                <div class="col-7 pr-0 text-right">
                                                    <p>£8.90</p>
                                                </div>
                                                </div>
                                                <div class="col col-12 px-0  p-lg-0">
                                                <div class="total_value">
                                                    <div class="row">
                                                    <div class="col col-9">
                                                        <p class="other-charges">Discount</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class=" discount-amount-applied text-right"> £0.00</p>
                                                    </div>
                                                    </div>
                                                                <div class="row">
                                                    <div class="col col-9">
                                                        <p class="other-charges">Delivery Fee</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class=" discount-amount-applied text-right fetch_delivery_fee">£7.00</p>
                                                    </div>
                                                    </div>
                                                            
                                                    <div class="row">
                                                    <div class="col col-9">
                                                        <p class="other-charges">Service Charge</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class=" discount-amount-applied text-right">£0.50</p>
                                                    </div>
                                                    </div>
                                                    
                                                                
                                                    <div class="row">
                                                    <div class="col col-9">
                                                        <p class="other-charges">Total Item</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class=" discount-amount-applied text-right">1.00</p>
                                                    </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                    <div class="col-5 text-left px-0">
                                                        <p>
                                                        <span>Grand Total</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-7 pr-0 text-right">
                                                        <p>£16.40</p>
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                    </div>
                                                </div>
                                                
                                                </div>
                
            
                                        <hr class="my-2">
            
        
        
                                        <div class="row total_value">
                                            <div class="col mt-3">
                                                <button type="button" class="btn btn-proceed btn-lg btn-block" id="quick_checkout_button">
                                                    <span>Checkout</span>
                                                </button>
                                            </div>
                                        </div>
          
          
                                        </section>
                                    </form>
                                </span>
                            </div>
                                
                            <br>
                            
                            <!-- Button trigger modal -->
                            <a class="allergy" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Do you have an allergy or other dietary requirement?
                            </a>
                            </section>
                        </div>
                    </div>
                </div>