
						<div class="single-product">
							<img class="img-fluid" src="/img/product/p1.jpg" alt="">
							<div class="product-details">
								<h6>{{$product-> name}}</h6>
								<div class="price">
									<h6>{{$product -> price_sale_format}}</h6>
									<h6 class="l-through">{{$product-> price_origin_format}}</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="{{route('frontend.product.detail',$product -> id)}}" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>