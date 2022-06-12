@extends('backend.layouts.master')
@section('title')
    Danh sách đánh giá
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
            <h1 class="m-0">Danh sách đánh giá</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách đánh giá</li>
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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Người tạo</th>
                      <th>Sản phẩm</th>
                      <th>Số sao</th>
                      <th>Nội dung</th>
                      <th>Trạng thái</th>
                      <th>Ngày tạo</th>
                      <th>Ngày sửa</th>
                      <th>Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($reviews as $key => $review)
                    <tr>
                      <td>@php echo $key + 1 @endphp</td>
                      <td>{{$review->user-> name}}</td>
                      <td><a href="{{route('frontend.product.detail', $review->product->id)}}">{{$review->product->name}}</a></td>
                      <td>{{$review->start_count}}</td>
                      <td>{{$review->content}}</td>
                      <td>{{$review->status_text}}</td>
                      <td>{{$review-> created_at}}</td>
                      <td>{{$review->updated_at}}</td>
                      <td style="display:flex;">
                          @if($review->status==0)
                          <a href="{{route('backend.reviews.hide',$review->id)}}" type="button" class= "btn-edit btn btn-danger"><i class="fa-solid fa-eye-slash"></i></a>
                          @else
                          <a style="" href="{{route('backend.reviews.show',$review->id)}}" type="button" class= "btn-edit btn btn-success"><i class="fa-solid fa-eye"></i></a>
                          @endif
                         
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{$reviews -> links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection