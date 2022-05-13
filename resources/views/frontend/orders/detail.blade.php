@extends('frontend.layouts.master')

@section('title')
	Đơn hàng
@endsection

@section('banner')
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Chi tiết đơn hàng</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Cửa hàng<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">Chi tiết đơn hàng</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('content')
	@foreach($orders as $key => $order)
		<div class="order_details_table" style="width:90%; margin:30px auto;">
		
					<h2>Chi tiết đơn hàng @php echo $key + 1 @endphp</h2>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Sản Phẩm</th>
									<th scope="col">Số Lượng</th>
									<th scope="col">Giá tiền</th>
									<th scope="col">Tổng</th>
								</tr>
							</thead>
							<tbody>
								@foreach($order->products as $product)
								<tr>

									<td>
										<p>{{$product->name}}</p>
									</td>
									<td>
										<h5>x {{$product->pivot->quantity}}</h5>
									</td>
									<td><p>{{$product->pivot->price}}</p></td>
									<td>
										<p>{{$product->pivot->quantity * $product->pivot->price}}</p>
									</td>
								</tr>
								@endforeach
								<!-- <tr>
									<td>
										<p>Pixelstore fresh Blackberry</p>
									</td>
									<td>
										<h5>x 02</h5>
									</td>
									<td>
										<p>$720.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<p>Pixelstore fresh Blackberry</p>
									</td>
									<td>
										<h5>x 02</h5>
									</td>
									<td>
										<p>$720.00</p>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<h4>Subtotal</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p>$2160.00</p>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Shipping</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p>Flat rate: $50.00</p>
									</td>
								</tr> -->
								
								<tr>
									<td>
										<h4>Tổng thanh toán</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p>{{$order->total}}</p>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Trạng thái đơn hàng</h4>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<h5></h5>
									</td>
									<td>
										<p style="color:red;">{{$order->status_text}}</p>
									</td>
								</tr>

							</tbody>
						</table>
						@if($order->status != 5 && $order->status !=6)
							<button class="btn btn-danger ml-2"><a style="color: #ffffff;" href="{{route('frontend.order.request.cancellation', $order->id)}}">Hủy đơn hàng</a></button>
						@endif
					</div>
					
				</div>
	@endforeach
	
@endsection