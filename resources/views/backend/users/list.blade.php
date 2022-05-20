@extends('backend.layouts.master')
@section('title')
    Danh sách tài khoản
@endsection
@section('script')
  <script src="https://kit.fontawesome.com/4829a23a17.js" crossorigin="anonymous"></script>
@endsection
@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách tài khoản</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh sách tài khoản</li>
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

          <form>
            <div class="input-group input-group-sm" style="width: 90%; margin-bottom: 10px;">
              <input type="text" name="name" class="form-control float-right mx-1" placeholder="Tên" value="{{request()->get('name')}}">
              <input type="text" name="email" class="form-control float-right mx-1" placeholder="Email" value="{{request()->get('email')}}">
              <input type="text" name="phone" class="form-control float-right mx-1" placeholder="Số điện thoại" value="{{request()->get('phone')}}">


                <button type="submit" class="btn btn-default" style="height:32.5px; margin-left:5px;padding-top:3px;">
                  Lọc kết quả
                </button>
            </div>
          </form>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href = "{{route('backend.users.create')}}" type="button" class="btn btn-primary">Tạo tài khoản</a> </h3>

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
                      <th>Tên</th>
                      <th>Ảnh đại diện</th>
                      <th>Địa chỉ</th>
                      <th>Email</th>
                      <th>Số điện thoại</th>
                      <th>Ngày tạo</th>
                      <th>Ngày cập nhật</th>
                      <th>Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                      <td>@php echo $key + 1 @endphp</td>
                      <td>{{$user -> name}}</td>
                      <td>
                      @if(!empty($user->image))
                        <img src="{{$user -> avatar_url_full }}"
                        width="100px" height="50px">
                        @endif
                      </td>
                      <td>{{$user -> address}}</td>
                      <td>{{$user -> email}}</td>
                      <td>{{$user -> phone}}</td>
                      <td>{{$user -> created_at}}</td>
                      <td>{{$user -> updated_at}}</td>
                      <td style="display:flex;">
                          <a href="{{route('backend.users.edit', $user->id)}}" type="button" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                          <form action="{{route('backend.users.destroy', $user->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                          <button style="margin-left: 5px;" type="submit" class= "btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
                {{$users-> links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection

