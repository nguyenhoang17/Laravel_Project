<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img width="137px" height="50px" src="/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						 <ul class="nav navbar-nav menu_nav ml-auto">

							<li class="nav-item "><a class="nav-link" href="{{route('frontend.home')}}">Trang chủ</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Cửa hàng</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{route('frontend.product.category',11)}}">Danh mục sản phẩm</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Chi tiết sản phẩm</a></li>
									<li class="nav-item"><a class="nav-link" href="@if(auth()->check()){{route('frontend.order.index')}}
																					@else {{route('auth.login')}}
																					@endif">Thanh toán</a></li>
									<li class="nav-item"><a class="nav-link" href="@if(auth()->check()){{route('frontend.carts.index')}}
																					@else {{route('auth.login')}}
																					@endif">Giỏ hàng</a></li>
									<!-- <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li> -->
								</ul>
							</li>
							<li class="nav-item"><a href="@if(auth()->check()){{route('frontend.order.placed',auth()->user()->id)}}
															@else {{route('auth.login')}}
															@endif" class="nav-link">Đơn Hàng</a></li>
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li> -->
							<!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li> -->
							<!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
							

							 <!-- Ap dung cache-->

							 <!-- {{-- @foreach($menus as $item)
								 <li class="nav-item active"><a class="nav-link" href="index.html">{{$item-> name}}</a></li>
							 @endforeach --}} -->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="{{route('frontend.carts.index')}}" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
							 <li class="nav-item"><a href="#" class="cart"><span ><i style="margin-right:-12px;" class="fa-solid fa-user"></i></span></a></li>
							@if(auth()-> check())
							<li class="nav-item"><a href="#" class="cart"><span style="margin-left: -10px;" >{{ auth()-> user()-> name}}</span>
							 <span><form style="display: inline;" action="{{route('auth.logout')}}" method="post">
								@csrf
								<a href="#" class=""
									onclick="this.closest('form').submit(); return false;">
									/Đăng xuất
								</a>
								</form> 
								
							</span>
							</li>
							@else
							<li style="line-height: 80px;" class="nav-item"><span style="margin-left: -10px;"><a href="{{route('auth.register')}}">Đăng ký</a> / <a href="{{route('auth.login')}}">Đăng nhập</a></span></li>
							@endif 
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form action="{{route('frontend.product.search')}}" class="d-flex justify-content-between">
					<input name="name" value="{{request()->get('name')}}" type="text" class="form-control" id="search_input" placeholder="Nhập tên cần tìm">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>