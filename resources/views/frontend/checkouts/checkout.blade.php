@extends('frontend.layouts.master')

@section('title')
	Trang chủ
@endsection

@section('banner')
    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Checkout</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('content')
<section class="checkout_area section_gap">
        <div class="container">
            
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="{{route('frontend.order.store')}}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <input value="{{auth()->user()->name}}" type="text" class="form-control" id="first" name="name" placeholder="Name">

                            </div>
                            <!-- <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div> -->
                            <!-- <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div> -->
                            <div class="col-md-6 form-group p_star">
                                <input value="{{auth()->user()->phone}}" type="text" class="form-control" id="number" name="phone">
                                
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input value="{{auth()->user()->email}}" type="text" class="form-control" id="email" name="email">
                                
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input value="{{auth()->user()->address}}" type="text" class="form-control" id="email" name="address">
                                
                            </div>
                            <!-- <div class="col-md-12 form-group p_star">
                                <select class="country_select" style="display: none;">
                                    <option value="1">Country</option>
                                    <option value="2">Country</option>
                                    <option value="4">Country</option>
                                </select><div class="nice-select country_select" tabindex="0"><span class="current">Country</span><ul class="list"><li data-value="1" class="option selected">Country</li><li data-value="2" class="option">Country</li><li data-value="4" class="option">Country</li></ul></div>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select" style="display: none;">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select><div class="nice-select country_select" tabindex="0"><span class="current">District</span><ul class="list"><li data-value="1" class="option selected">District</li><li data-value="2" class="option">District</li><li data-value="4" class="option">District</li></ul></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                            </div> -->
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Shipping Details</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                @foreach($products as $product)
                                <input type="hidden" value="{{$product->id}}" name="product_id[]">
                                <li><a href="#">{{$product -> name}} <span class="middle">x {{$product->qty}}</span> <span class="last">{{$product->price}}</span></a></li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                               
                                <li><a href="#">Total <span>{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</span></a></li>
                            </ul>
                            <!-- <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div> -->
                            <!-- <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div> -->
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms &amp; conditions*</a>
                            </div>
                            <button type="submit" style="width:100%; border:none;">Proceed to Paypal</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
