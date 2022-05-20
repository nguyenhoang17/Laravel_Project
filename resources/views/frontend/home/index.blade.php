@extends('frontend.layouts.master')

@section('title')
	Trang chủ
@endsection

@section('banner')
	<section class="banner-area">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-start">
					<div class="col-lg-12">
						<div class="active-banner-slider owl-carousel">
							<!-- single-slide -->
							<div class="row single-slide align-items-center d-flex">
								<div class="col-lg-5 col-md-6">
									<div class="banner-content">
										<h1>Các sản phẩm<br>Adidas!</h1>
										<p>Cửa hàng chúng tôi có rất nhiều mẫu giày Adidas mới, bạn hãy lựa chọn cho mình một sản phẩm ngay thôi!!! </p>
										<div class="add-bag d-flex align-items-center">
											<a class="add-btn" href="{{route('frontend.product.category',11)}}"><span class="lnr lnr-cross"></span></a>
											<span class="add-text text-uppercase">Chọn sản phẩm</span>
										</div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="banner-img">
										<img class="img-fluid" src="/img/banner/banner-img.png" alt="">
									</div>
								</div>
							</div>
							<!-- single-slide -->
							<div class="row single-slide align-items-center">
								<div class="col-lg-5">
									<div class="banner-content">
									<h1>Các sản phẩm<br>Nike!</h1>
									<p>Cửa hàng chúng tôi có rất nhiều mẫu giày Nike mới, bạn hãy lựa chọn cho mình một sản phẩm ngay thôi!!! </p>
										<div class="add-bag d-flex align-items-center">
											<a class="add-btn" href="{{route('frontend.product.category',11)}}"><span class="lnr lnr-cross"></span></a>
											<span class="add-text text-uppercase">Chọn sản phẩm</span>
										</div>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="banner-img">
										<img class="img-fluid" src="/img/banner/banner-img.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection

@section('features')
	<section class="features-area section_gap">
			<div class="container">
				<div class="row features-inner">
					<!-- single features -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="f-icon">
								<img src="/img/features/f-icon1.png" alt="">
							</div>
							<h6>Miễn phí giao hàng</h6>
							<p>Miễn phí cho tất cả đơn hàng</p>
						</div>
					</div>
					<!-- single features -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="f-icon">
								<img src="/img/features/f-icon2.png" alt="">
							</div>
							<h6>Chính sách hoàn trả</h6>
							<p>Miễn phí cho tất cả đơn hàng</p>
						</div>
					</div>
					<!-- single features -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="f-icon">
								<img src="/img/features/f-icon3.png" alt="">
							</div>
							<h6>Hỗ trợ 24/7</h6>
							<p>Miễn phí cho tất cả đơn hàng</p>
						</div>
					</div>
					<!-- single features -->
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-features">
							<div class="f-icon">
								<img src="/img/features/f-icon4.png" alt="">
							</div>
							<h6>Thanh toán an toàn</h6>
							<p>Miễn phí cho tất cả đơn hàng</p>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection

@section('category_products')
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="/img/category/c1.jpg" alt="">
								<a href="/img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày thời trang đẹp</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="/img/category/c2.jpg" alt="">
								<a href="/img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày chống thấm</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="/img/category/c3.jpg" alt="">
								<a href="/img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày Nike</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="/img/category/c4.jpg" alt="">
								<a href="/img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Giày thể thao chất lượng</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="/img/category/c5.jpg" alt="">
						<a href="/img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
@endsection

@section('products')
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Sản phẩm mới nhất</h1>
							<p>Dưới đây là các sản phẩm mới nhất của chúng tôi, bạn có thể lựa chọn và sắm cho mình 1 đôi giày ứng ý!!!</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($latest_products as $latest_product)
						<div class="col-lg-3 col-md-6">
							@include('frontend.home.components.product_item',['product'=> $latest_product])
						</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Sản phẩm bán chạy</h1>
							<p>Dưới đây là các sản phẩm bán chạy nhất của chúng tôi, bạn có thể lựa chọn và sắm cho mình 1 đôi giày ứng ý!!!</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach($selling_products as $selling_product)
						<div class="col-lg-3 col-md-6">
							@include('frontend.home.components.product_item',['product'=> $selling_product])
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection

@section('exclusive_deal')
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Ưu đãi sắp kết thúc!</h1>
							<p>Dành cho những bạn yêu thích Nike</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Ngày</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Giờ</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Phút</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Giây</span>
								</div>
							</div>
						</div>
					</div>
					<a href="{{route('frontend.product.brand',6)}}" class="primary-btn">Chọn ngay</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="{{$latest_products[0]->image->path}}" alt="">
							<div class="product-details">
								<div class="price">
									<h6>{{$latest_products[0]->price_sale_format}}</h6>
									<h6 class="l-through">{{$latest_products[0]->price_origin_format}}</h6>
								</div>
								<h4>{{$latest_products[0]->name}}</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href="{{route('frontend.carts.add',$latest_products[0]->id)}}"><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
								</div>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="{{$latest_products[1]->image->path}}" alt="">
							<div class="product-details">
								<div class="price">
									<h6>{{$latest_products[1]->price_sale_format}}</h6>
									<h6 class="l-through">{{$latest_products[1]->price_origin_format}}</h6>
								</div>
								<h4>{{$latest_products[1]->name}}</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href="{{route('frontend.carts.add',$latest_products[1]->id)}}"><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('brand')
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				@foreach($brands as $brand)
				<a class="col single-img" href="{{route('frontend.product.brand',['id'=>$brand->id])}}">
					<img class="img-fluid d-block mx-auto" src="{{$brand->image_url_full}}" alt="">
				</a>
				@endforeach
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