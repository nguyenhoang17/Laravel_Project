

				<div class="col-lg-9">
					<div class="row">
						@foreach($related_products as $item)
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="{{route('frontend.product.detail',$item->id)}}"><img width="80px" src="{{$item->image->path}}" alt=""></a>
								<div class="desc">
									<a href="{{route('frontend.product.detail',$item->id)}}" class="title">{{$item->name}}</a>
									<div class="price">
										<h6 style="color:#ee4d2d; font-size:13px;">{{$item->price_sale_format}}</h6>
										<h6 style="font-size:13px;" class="l-through">{{$item->price_origin_format}}</h6>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
		
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="/img/category/c5.jpg" alt="">
							<style>
								body > section.related-product-area.section_gap_bottom > div > div:nth-child(2) > div.col-lg-3 > div > a > img{
									height: 210px;
								}
							</style>
						</a>
					</div>
				</div>
			</div>
	