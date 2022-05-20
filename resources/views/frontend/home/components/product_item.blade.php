
						<div class="single-product">
							<img class="img-fluid" src="@if(!empty($product->image))
                                      {{$product->image->path}}
                                      @endif" alt="">
							<div class="product-details">
								<h6>{{$product-> name}}</h6>
								<div class="price">
									<h6 style="color:#ee4d2d;">{{$product -> price_sale_format}}</h6>
									<h6 class="l-through">{{$product-> price_origin_format}}</h6>
								</div>
								<div class="prd-bottom">

									<a href="@if(auth()->check()){{route('frontend.carts.add',['id' =>$product->id])}}
														 @else{{route('auth.login')}}
														 @endif" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">Thêm vào giỏ hàng</p>
									</a>
									<!-- <a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Yêu thích</p>
									</a> -->
									<!-- <a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a> -->
									<a href="{{route('frontend.product.detail',['id' => $product->id])}}" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Chi tiết</p>
									</a>
									<p style="float: right;">Đã bán: {{$product->sell_count}}</p>
								</div>
							</div>
						</div>