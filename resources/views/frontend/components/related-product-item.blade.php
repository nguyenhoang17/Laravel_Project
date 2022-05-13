

				<div class="col-lg-9">
					<div class="row">
						@foreach($related_products as $item)
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="{{route('frontend.product.detail',$item->id)}}"><img width="100px" src="{{$item->image->path}}" alt=""></a>
								<div class="desc">
									<a href="{{route('frontend.product.detail',$item->id)}}" class="title">{{$item->name}}</a>
									<div class="price">
										<h6 style="color:#ee4d2d;">{{$item->price_sale_format}}</h6>
										<h6 class="l-through">{{$item->price_origin_format}}</h6>
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
						</a>
					</div>
				</div>
			</div>
	