@extends('frontend.layouts.master')

@section('title')
	Trang chủ
@endsection

@section('banner')
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Trang chi tiết sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Cửa hàng<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">Chi tiết sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('content')

	<div class="product_image_area">
		<div class="container">
			<form action="@if(auth()->check()){{route('frontend.carts.add',['id' =>$product->id])}}
														 @else{{route('auth.login')}}
														 @endif">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<form action="">
					<div class="s_Product_carousel ">
						@foreach($images as $image)
						<div class="single-prd-item">
							<img class="img-fluid" src="{{$image->path}}" alt="">
						</div>
						@endforeach
			</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$product-> name}}</h3>
						<h2>{{$product-> price_sale_format}}</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Danh mục</span> : {{$product-> category-> name}}</a></li>
							<li><a href="#"><span>Khả dụng</span> : {{$product -> quantity}} sản phẩm</a></li>
						</ul>
						<!-- <div style=" width:500px; height:100px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">@php echo "$product->description" @endphp</div> -->
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" max="{{$product->quantity}}" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst< {{$product->quantity}}) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 1 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<!-- <a class="primary-btn" href="{{--@if(auth()->check()){{route('frontend.carts.add',['id' =>$product->id])}}
														 @else{{route('auth.login')}}
														 @endif--}}">Add to Cart</a> -->
								<button style="border:none;" class="primary-btn" type="submit">Addtocart</button>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
    <section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bình luận</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Đánh giá</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>@php echo "$product->description" @endphp</p>
				</div>
				<!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Freshness Duration</h5>
									</td>
									<td>
										<h5>03days</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Each Box contains</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								@foreach($comments as $comment)
								<div class="review_item">
									<div class="media">
										<div class="d-flex" >
											<img style="border-radius:50%;" width="50px" height="50px" src="http://127.0.0.1:8000/images/{{$comment->user->image}}" alt="">
										</div>
										<div class="media-body">
											<h4>{{$comment->user->name}}</h4>
											<h5>{{$comment->created_at}}</h5>
											<!-- <a class="reply_btn" href="#">Reply</a> -->
										</div>
									</div>
									<p>{{$comment->content}}</p>
								</div>
								@endforeach
								
							</div>
						</div>
						<div class="col-lg-6">
							@if(auth()->check())
							<div class="review_box">
								<h4>Thêm bình luận</h4>
								<form class="row contact_form" action="{{route('frontend.comment.add',$product->id)}}" method="post" id="contactForm" novalidate="novalidate">
									@csrf
									
									<!-- <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="content" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
							@else <p>Bạn cần đăng nhập để comment.</p><a href="{{route('auth.login')}}">Đăng Nhập</a>
							@endif
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>({{count($reviews)}} Đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on 3 Reviews</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								@foreach($reviews as $review)
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img style="border-radius:50%" width="50px" height="50px" src="{{$review->user->avatar_url_full }}" alt="">
										</div>
										<div class="media-body">
											<h4>{{$review->user->name}}</h4>

											<p>Số sao đã đánh giá: {{$review->start_count}} <i class="fa fa-star"></i></p>
											
										</div>
									</div>
									<p>{{$review->content}}</p>
								</div>
								@endforeach
								
							</div>
						</div>
						<div class="col-lg-6">
						@php
						$check = 0;
						if(auth()->check()){
									$check=2;
								}
						foreach($orders as $order){
							foreach($order->products as $productOrdered){
								
								if(auth()->check() && auth()->user()->id == $order->user_id && $product->id == $productOrdered->id && $order->status==4){
									$check=1;
								}
								

						
							}
						}
						@endphp
						@if($check==1)
						
							<div class="review_box">
								<h4>Thêm đánh giá của bạn về sản phẩm</h4>
								<!-- <p>Your Rating:</p>
								<ul class="list">
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
								</ul>
								<p>Outstanding</p> -->
								<form class="row contact_form" action="{{route('frontend.review.add',$product->id)}}" method="post" id="contactForm" novalidate="novalidate">
									@csrf
									<!-- <div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full name'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
										</div>-->
									</div>
									<div class="col-md-12">
									<p>Chọn số sao muốn đánh giá cho sản phẩm:</p>
									<select id="starts" name="start">
										<option value="1" selected>1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select><span style="color:#fbd600;"><i style="padding:10px;" class="fa fa-star"></i></span>
										<div style="margin-top:20px;" class="form-group">
											<textarea name="review" class="form-control" name="message" id="message" rows="5" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
							@elseif($check==2) <p style="color:red;"> Tài khoản củ bạn cần mua sản phẩm này thì mới được đánh giá sản phẩm</p><a href="{{route('frontend.product.category',1)}}">Cửa hàng</a>
							@else <p>Bạn cần đăng nhập và mua sản phẩm này thì mới đk đánh giá</p><a href="{{route('auth.login')}}">Đăng Nhập</a>
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('related_product')
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ưu đãi trong tuần</h1>
						<p>Các sản phẩm này được ưu đãi cũng như khuyến mại trong tuần</p>
					</div>
				</div>
			</div>
			<div class="row">
			@include('frontend.components.related-product-item')
	
		</div>
	</section>
@endsection