<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
         
          
           <img src="{{auth()->user() -> avatar_url_full }}"class="img-circle elevation-2" alt="User Image"> 
          
        </div>
        <div class="info">
          <a href="#" class="d-block"> 
           
            {{auth()-> user()-> name}}
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <!-- <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div> -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- <li class="nav-item ">
            <a href="http://127.0.0.1:8000/log-viewer" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                LOG
                </p>
            </a>
            </li> -->
            <li class="nav-item ">
            <a href="{{route('backend.')}}" class="nav-link @if(request()-> is('backend/dashboard')) active @endif">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
            </li>
          <li class="nav-header">Quản Lý Chung</li>
          <li class="nav-item @if(request()-> routeIs('backend.categories.*')) menu-open @endif">
  
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.categories.*')) active @endif">
              <i class="nav-icon fa-solid fa-book"></i>
              <p>
                Quản lý Danh Mục
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.categories.index')}}" class="nav-link @if(request()-> routeIs('backend.categories.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Danh Mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('backend.categories.create')}}" class="nav-link @if(request()-> routeIs('backend.categories.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Danh Mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(request()-> routeIs('backend.brands.*')) menu-open @endif">
  
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.brands.*')) active @endif">
              <i class="nav-icon fa-solid fa-shop"></i>
              <p>
                Quản Lý Nhãn Hiệu
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('backend.brands.index') }}" class="nav-link @if(request()-> routeIs('backend.brands.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Nhãn Hiệu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.brands.create')}}" class="nav-link @if(request()-> routeIs('backend.brands.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Nhãn Hiệu</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(request()-> routeIs('backend.products.*')) menu-open @endif">
  
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.products.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản Lý Sản Phẩm
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('backend.products.index') }}" class="nav-link @if(request()-> routeIs('backend.products.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.products.create')}}" class="nav-link @if(request()-> routeIs('backend.products.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Sản Phẩm</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item @if(request()-> routeIs('backend.comments.*')) menu-open @endif">
  
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.comments.*')) active @endif">
            <i class="fa-solid fa-comment nav-icon"></i>
              <p>
                Quản Lý Bình Luận
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.comments.index')}}" class="nav-link @if(request()-> routeIs('backend.comments.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Bình Luận</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(request()-> routeIs('backend.reviews.*')) menu-open @endif">
  
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.reviews.*')) active @endif">
            <i class="fa-solid fa-eye nav-icon"></i>
              <p>
                Quản Lý Đánh Giá
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.reviews.index')}}" class="nav-link @if(request()-> routeIs('backend.reviews.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Đánh Giá</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(request()-> routeIs('backend.orders.*')) menu-open @endif">
  
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.orders.*')) active @endif">
            <i class="fa-solid fa-cart-shopping nav-icon"></i>
              <p>
                Quản Lý Đơn Hàng
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('backend.orders.index')}}" class="nav-link @if(request()-> routeIs('backend.orders.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách Đơn Hàng</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-header">Hệ thống</li>
          @can('show',auth()->user())
          <li class="nav-item @if(request()-> routeIs('backend.users.*')) menu-open @endif">
            <a href="#2" class="nav-link @if(request()-> routeIs('backend.users.*')) active @endif">
            
            <i class="fa-solid fa-user nav-icon"></i>
              <p>
                Quản lý Users
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('backend.users.index')}}" class="nav-link @if(request()-> routeIs('backend.users.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.users.create')}}" class="nav-link @if(request()-> routeIs('backend.users.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.users.list.destroy')}}" class="nav-link @if(request()-> routeIs('backend.users.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách TK bị khóa</p>
                </a>
              </li>
              
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>