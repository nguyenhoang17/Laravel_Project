@extends('backend.layouts.master')
@section('title')
    Danh sách nhãn hiệu
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
            <h1 class="m-0">Danh sách nhãn hiệu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách nhãn hiệu</li>
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
            <div class="input-group input-group-sm" style="width: 40%; margin-bottom: 10px;">
              <input type="text" name="name" class="form-control float-right mx-1" placeholder="Tên" value="{{request()->get('name')}}">
                <button type="submit" class="btn btn-default" style="height:32.5px; margin-left:5px;padding-top:3px;">
                  Lọc kết quả
                </button>
            </div>
          </form>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href = "{{route('backend.brands.create')}}" type="button" class="btn btn-success"><i class="fa-solid fa-plus"></i> Thêm nhãn hiệu</a> </h3>

                <div class="card-tools">
                  <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Tên nhãn hiệu</th>
                      <th>Ảnh</th>
                      <th>Ngày tạo</th>
                      <th>Ngày cập nhật</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($brands as $key => $brand)
                    <tr>
                      <td>@php echo $key + 1 @endphp</td>
                      <td style= "color: blue">{{$brand-> name}}</a></td>
                      <td><img width="100px;" src="{{$brand->image_url_full}}" alt=""></td>
                      <td>{{$brand-> created_at}}</td>
                      <td>{{$brand-> updated_at}}</td>
                      <td style="display:flex;">
                          <a href="{{route('backend.brands.edit',$brand->id)}}" type="button" class= "btn-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                          <form action="{{route('backend.brands.destroy',$brand->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                          <button style="margin-left:10px;" type="submit" class= "btn-delete show_confirm" data-name="{{$brand->name}}"><i class="fa-solid fa-trash"></i></button>
                          </form>
                          
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{$brands -> links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection