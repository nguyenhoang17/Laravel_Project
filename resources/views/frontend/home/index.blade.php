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
										<h1>Nike New <br>Collection!</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										<div class="add-bag d-flex align-items-center">
											<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
											<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
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
							<div class="row single-slide">
								<div class="col-lg-5">
									<div class="banner-content">
										<h1>Nike New <br>Collection!</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										<div class="add-bag d-flex align-items-center">
											<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
											<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
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
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="/img/category/c1.jpg" alt="">
								<a href="/img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
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
										<h6 class="deal-title">Sneaker for Sports</h6>
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
										<h6 class="deal-title">Product for Couple</h6>
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
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="/img/category/c5.jpg" alt="">
						<a href="/img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach($coming_products as $coming_product)
						<div class="col-lg-3 col-md-6">
							@include('frontend.home.components.product_item',['product'=> $coming_product])
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
							<p>Who are in extremely love with eco friendly system.</p>
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
					<a href="" class="primary-btn">Mua ngay</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="/img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
								</div>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="/img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
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
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="/img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="/img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="/img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="/img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="/img/brand/5.png" alt="">
				</a>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="/img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="/img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection