@extends('backend.layouts.master')
@section('title')
    Danh sách đơn hàng
@endsection
@section('script')
  <script src="https://kit.fontawesome.com/4829a23a17.js" crossorigin="anonymous"></script>
@endsection
@section('css')
<link rel="stylesheet" href="/backend/dist/css/posts.css">
@endsection
@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách đơn hàng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách đơn hàng</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
          <!-- <form method="GET">
            <div class="input-group input-group-sm" style="width: 40%; margin-bottom: 10px;">
              <input type="date" name="date_from" class="form-control float-right mx-1" placeholder="" value="{{request()->get('date_from')}}">
              <input type="date" name="date_to" class="form-control float-right mx-1" placeholder="" value="{{request()->get('date_to')}}">
                <button type="submit" class="btn btn-default" style="height:32.5px; margin-left:5px;padding-top:3px;">
                  Lọc kết quả
                </button>
            </div>
          </form> -->
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Sản phẩm</th>
                      
                      <th>Số lượng</th>
                      <th>Giá</th>
                      <th>Thông tin thêm</th>
                      <th>Tổng tiền</th>
                      <th>Người mua</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th>Trạng thái</th>
                      <th>Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $key => $order)
                    <tr>
                      <td>@php echo $key + 1 @endphp</td>
                      <td style= "color: blue"><a href =""></a>@foreach($order->products as $product)
                        {{$product->name}}</br>
                      @endforeach</td>
                      <td>@foreach($order->products as $product)
                        {{$product->pivot->quantity}}</br>
                      @endforeach</td>
                      <td>@foreach($order->products as $product)
                        {{number_format($product->pivot->price,0,'.',',')}}đ</br>
                      @endforeach</td>
                      <td>{{$order->note}}</td>
                      <td>{{number_format($order->total,0,'.',',')}}đ</td>
                      <td>{{$order->user->name}}</td>
                      <td>{{$order->user->email}}</td>
                      <td>{{$order->user->address}}</td>
                      <td>{{$order->user->phone}}</td>
                      <td style="@if($order->status==5) color:red;@endif ">
                      {{$order->status_text}}
                      </td>
                      <td>@php
                              $disabled1="";
                              $disabled2="";
                              $disabled3="";
                              $disabled4="";
                              $disabled5="";
                              if($order->status>=1){
                                $disabled1 = "disabled";
                              }
                              if($order->status>=2){
                                $disabled2 = "disabled";
                              }
                              if($order->status>=3){
                                $disabled3 = "disabled";
                              }
                              if($order->status>=4){
                                $disabled4 = "disabled";
                              }
                              if($order->status>=6 | $order->status==4){
                                $disabled5 = "disabled";
                              }
                            @endphp
                          <span><select name="forma" onchange="location = this.value;">
                            <option disabled selected>---Sửa trạng thái---</option>
                            <option value="" {{$disabled1}}>Đã đặt hàng</option>
                            <option value="{{route('backend.orders.confirmed',$order->id)}}" {{$disabled2}}>Đơn hàng đã được xác nhận</option>
                            <option value="{{route('backend.orders.shipping',$order->id)}}" {{$disabled3}}>Đang vận chuyển</option>
                            <option value="{{route('backend.orders.delivered',$order->id)}}" {{$disabled4}}>Đã giao hàng</option>
                            <option value="{{route('backend.orders.cancelled',$order->id)}}" {{$disabled5}}>Đơn hàng bị hủy</option>
                          </select></span>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{$orders -> links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div>
@endsection
