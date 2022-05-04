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
						<a href="category.html">Cart</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('content')
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                            
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="/img/cart.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$product-> name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{number_format($product->price,0,'.',',')}}đ</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                    
                                    <a href="{{route('frontend.carts.down',['rowId'=>$product->rowId,'qty'=>$product->qty])}}"><i class="fa-solid fa-minus"></i></a>
                                   
                                        <input style="text-align: center;padding-left:0;height:30px;" type="text" name="qty" id="sst" maxlength="12" value="{{$product->qty}}" title="Quantity:" class="input-text qty">
                                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                                        <a href="{{route('frontend.carts.add',$product->id)}}"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{number_format($product->price*$product->qty,0,'.',',')}}đ</h5>
                                </td>
                                <td><a href="{{route('frontend.carts.remove',$product->rowId)}}"><i class="fa-solid fa-trash"></i></a></td>
                                
                            </tr>
                           @endforeach
                            <!-- <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="primary-btn" href="#">Apply</a>
                                        <a class="gray_btn" href="#">Close Coupon</a>
                                    </div>
                                </td>
                            </tr> -->
                            <tr>
                                <td>
                                    <a class="btn btn-danger" style="padding: 10px 10px; border: 1px solid; " href="{{route('frontend.carts.destroy')}}">Update Cart</a>
                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}đ</h5>
                                </td>
                            </tr>
                            <!-- <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: $5.00</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: $10.00</a></li>
                                            <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select" style="display: none;">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select><div class="nice-select shipping_select" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="1" class="option selected">Bangladesh</li><li data-value="2" class="option">India</li><li data-value="4" class="option">Pakistan</li></ul></div>
                                        <select class="shipping_select" style="display: none;">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select><div class="nice-select shipping_select" tabindex="0"><span class="current">Select a State</span><ul class="list"><li data-value="1" class="option selected">Select a State</li><li data-value="2" class="option">Select a State</li><li data-value="4" class="option">Select a State</li></ul></div>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr> -->
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="#">Continue Shopping</a>
                                        <a class="primary-btn" href="{{route('frontend.order.index',auth()->user()->id)}}">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </section>
@endsection