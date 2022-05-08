@extends('backend.layouts.master')
@section('title')
    Create Product
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
            <h1 class="m-0">Tạo sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tạo Sản phẩm</li>
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
              <form class="" method="POST" action="{{route('backend.products.update',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input name="name" type="text" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                   
                  </div>
                  <div class="form-group col-6">
                      <label for="exampleInputPassword1">Ảnh</label>
                     <input value="{{}}" multiple class="form-control" type="file" name="images[]">
                     
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea class="col-12"  name="description" id="text_area" cols="30" rows="10">{{$product->description}}</textarea>
                   
                  </div>
                  
                

                  
                  <div class= "row">
                    <div class="form-group col-6">
                      <label for="exampleInputPassword1">Danh mục</label>
                      <select name="category_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      @foreach($categories as $category)
                          <option value="{{$category-> id}}" selected>{{$category -> name}}</option>
                          @endforeach
                      </select>
                     
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Số lượng</label>
                        <input name="quantity" type="number" min="1" value="{{$product->quantity}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập số lượng">
                        </div>
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Giá gốc</label>
                        <input name="price_origin" type="text" step=".01" value="{{$product->price_origin}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập...">
                        </div>
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Giá khuyến mãi</label>
                        <input name="price_sale" type="text" step=".01" value="{{$product->price_sale}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập...">
                        </div>
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Trạng Thái</label>
                        <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        
                            <!-- <option value="1" data-select2-id="3">Còn hàng</option>
                            <option value="2" data-select2-id="3">Hết hàng</option>
                            <option value="3" data-select2-id="3">Ngừng bán</option> -->
                            @foreach(\App\Models\Product::$statusArr2 as $key => $value)
                            <option value="{{ $key }}" {{ ($product->status == $key) ? 'selected' : '' }}>
                                @if($key==1) Còn hàng
                                @elseif($key==2) Hết hàng
                                @else Ngừng bán
                                @endif
                                            </option>
                            @endforeach


                            
                        
                      </select>
                     

                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href= "{{--route('backend.posts.index')--}}" type="button" class="btn btn-outline-secondary">Hủy</a>
                <button style="float:right;" type="submit" class="btn btn-success">Lưu</button>
                </div>
              </form>
            </div>
        </div>
        
      </div><!-- /.container-fluid -->
@endsection
