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
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Người tạo</th>
                      <th>Sản phẩm</th>
                      <th>Nội dung</th>
                      <th>Trạng thái</th>
                      <th>Ngày tạo</th>
                      <th>Ngày sửa</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($comments as $key => $comment)
                    <tr>
                      <td>@php echo $key + 1 @endphp</td>
                      <td>{{$comment->user-> name}}</td>
                      <td>{{$comment->product->name}}</td>
                      <td>{{$comment->content}}</td>
                      <td>{{$comment->status_text}}</td>
                      <td>{{$comment-> created_at}}</td>
                      <td>{{$comment->updated_at}}</td>
                      <td style="display:flex;">
                          <a href="{{route('backend.comments.hide',$comment->id)}}" type="button" class= "btn-edit btn btn-danger"><i class="fa-solid fa-eye-slash"></i></a>
                          <a style="margin-left:5px;" href="{{route('backend.comments.show',$comment->id)}}" type="button" class= "btn-edit btn btn-success"><i class="fa-solid fa-eye"></i></a>
                          
                         
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{$comments -> links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection