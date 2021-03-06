@extends('backend.layouts.master')
@section('title')
    Thêm danh mục
@endsection
@section('script')
  <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor 4
      // instance, using default configuration.
      CKEDITOR.replace( 'text_area' );
    </script>
@endsection
@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thêm danh mục</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm danh mục</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="card card-primary col-12">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="" method="POST" action="{{route('backend.categories.store')}}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục<span style="color:red;"> *</span></label>
                    <input name="name" value="{{old('name')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                    @error('name')
                      <div style="color:red;" class="">{{$message}}</div>
                    @enderror
                  </div>
        
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword1">Trạng thái</label>
                      <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="3">Option1</option>
                      <option data-select2-id="36">Option2</option>
                      <option data-select2-id="37">Option3</option>
                      <option data-select2-id="38">Option4</option>
                      <option data-select2-id="39">Option5</option>
                      <option data-select2-id="40">Option6</option>
                      <option data-select2-id="41">Option7</option>
                      </select>
                    </div> -->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href= "{{route('backend.categories.index')}}" type="button" class="btn btn-outline-secondary">Hủy</a>
                <button style="float:right;" type="submit" class="btn btn-success">Lưu</button>
                </div>
              </form>
            </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection