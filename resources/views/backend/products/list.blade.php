@extends('backend.layouts.master')
@section('title')
    Danh sách sản phẩm
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
            <h1 class="m-0">Danh sách sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách sản phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection

@section('content')
    <!-- @if (session('error'))
      <div class="alert alert-danger" role="alert">
      {{ session('error') }}
      </div>
      @endif
      @if (session('success'))
      <div class="alert alert-success" role="alert">
      {{ session('success') }}
      </div>
      @endif -->

<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
          <form>
            <div class="input-group input-group-sm" style="margin-bottom: 10px;">
              <input type="text" name="name" class="form-control float-right mx-1" placeholder="Tên sản phẩm" value="{{request()->get('name')}}">
              <select class="mx-1" style="border-color: #ccc;" name="category_id" id="cars">
                <option value="" selected disabled>--Danh mục--</option>
                @foreach($categories as $category) 
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach                
              </select>
              <select class="mx-1" style="border-color: #ccc;" name="brand_id" id="cars">
                <option value="" selected disabled>--Nhãn hiệu--</option>
                @foreach($brands as $brand) 
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach                
              </select>
              <select class="mx-1" style="border-color: #ccc;" name="brand_id" id="cars">
                <option value="" selected disabled>--Trạng thái--</option>
                <option value="1" >Còn hàng</option>
                <option value="2" >Hết hàng</option>
                <option value="3" >Ngưng bán</option>
                             
              </select>


                <button type="submit" class="btn btn-default" style="height:32.5px; margin-left:5px;padding-top:3px;">
                  Lọc kết quả
                </button>
            </div>
          </form>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href = "{{route('backend.products.create')}}" type="button" class="btn btn-success"><i class="fa-solid fa-plus"></i> Thêm sản phẩm</a> </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div> -->
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Tên sản phẩm</th>
                      <th>Ảnh</th>
                      <th>Danh mục</th>
                      <th>Nhãn Hiệu</th>
                      <th>Số lượng</th>
                      <th>Giá nhập vào</th>
                      <th>Giá bán</th>
                      <th>Giá khuyến mãi</th>
                      <th>% giảm giá</th>
                      <th>Lượt review</th>
                      <th>Lượt bán</th>
                      <th>Lượt Like</th>
                      <th>Trạng thái</th>
                      <th>Ngày tạo</th>
                      <th>Ngày sửa</th>
                      <th>Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $key => $product)
                    <tr>
                      <td>@php echo $key + 1 @endphp</td>
                      <td style= "color: blue"><a href ="{{--route('backend.categories.show',$category-> id)--}}">{{$product-> name}}</a></td>
                      <td>
                      <img src="@if(!empty($product->image))
                                      {{$product->image->path}}
                                      @endif
                                      "width="100px" height="80px">
                      
                      </td>
                      <td>{{$product->category-> name}}</td>
                      <td>{{$product->brand->name}}</td>
                      <td>{{$product-> quantity}}</td>
                      <td>{{$product->price_input_format}}</td>
                      <td>{{$product->price_origin_format}}</td>
                      <td>{{$product->price_sale_format}}</td>
                      <td>{{number_format((1-($product->price_sale/$product->price_origin))*100,2)}}%</td>
                      <td>{{$product->review_count}}</td>
                      <td>{{$product->sell_count}}</td>
                      <td>{{$product->like_count}}</td>
                      <!-- <td>{{$product->attribute}}</td> -->
                      <td>{{$product->status_text}}</td>
                      <td>{{$product-> created_at}}</td>
                      <td>{{$product->updated_at}}</td>
                      <td style="display:flex;">
                      @can('update',$product)
                          <a href="{{route('backend.products.edit',$product->id)}}" type="button" class= "btn-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                      @endcan   
                      @can('delete',$product) 
                          <form action="{{route('backend.products.destroy',$product->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                          <button style="margin-left:10px;" type="submit" class= "btn-delete show_confirm" data-name="{{$product->name}}"><i class="fa-solid fa-trash"></i></button>
                          </form>
                      @endcan
                          <!-- <a href="{{--route('backend.posts.destroy',['id'=>1])--}}" type="button" class= "btn-delete"><i class="fa-solid fa-trash"></i></a> -->
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{$products -> links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection