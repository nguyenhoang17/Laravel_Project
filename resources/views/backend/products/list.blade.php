@extends('backend.layouts.master')
@section('title')
    List Products
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href = "{{route('backend.products.create')}}" type="button" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tạo sản phẩm</a> </h3>

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
                      <th>Tên sản phẩm</th>
                      <th>Ảnh</th>
                      <th>Danh mục</th>
                      <th>Mô tả</th>
                      <th>Số lượng</th>
                      <th>Giá gốc</th>
                      <th>Giá khuyến mãi</th>
                      <th>% giảm giá</th>
                      <th>Lượt review</th>
                      <th>Lượt bán</th>
                      <th>Lượt Like</th>
                      <th>Trạng thái</th>
                      <th>Ngày tạo</th>
                      <th>Ngày sửa</th>
                      <th>Action</th>
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
                      <td>{{$product->description}}</td>
                      <td>{{$product-> quantity}}</td>
                      <td>{{$product->price_origin_format}}</td>
                      <td>{{$product->price_sale_format}}</td>
                      <td>{{(1-($product->price_sale/$product->price_origin))*100}}%</td>
                      <td>{{$product->review_count}}</td>
                      <td>{{$product->sell_count}}</td>
                      <td>{{$product->like_count}}</td>
                      <!-- <td>{{$product->attribute}}</td> -->
                      <td>{{$product->status_text}}</td>
                      <td>{{$product-> created_at}}</td>
                      <td>{{$product->updated_at}}</td>
                      <td style="display:flex;">
                          <a href="{{route('backend.products.edit',$product->id)}}" type="button" class= "btn-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                          <form action="{{route('backend.products.destroy',$product->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                          <button style="margin-left:10px;" type="submit" class= "btn-delete"><i class="fa-solid fa-trash"></i></button>
                          </form>
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