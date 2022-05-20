@extends('backend.layouts.master')
@section('title')
    Thêm sản phẩm
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
            <h1 class="m-0">Thêm sản phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
              <form class="" method="POST" action="{{route('backend.products.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm<span style="color:red;"> *</span></label>
                    <input name="name" value="{{old('name')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                   
                  </div>
                  @error('name')
                    <div class="" style="color:red;margin-top:-17px;">{{$message}}</div>
                    @enderror
                  <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh sản phẩm<span style="color:red;"> *</span></label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="listImg"
                                               name="images[]" value="{{old('images[]')}}" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                    </div>
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div> -->
                                </div>
                                @error('images[]')
                                <div class="" style="color:red;">{{$message}}</div>
                                @enderror
                                <div class="gallery d-flex flex-wrap" style="margin-top: 20px;"></div>
                                
                                <style>
                                #buu {
                                    display: flex;
                                    flex-wrap: wrap;
                                    flex-direction: column;
                                }

                                #buu > img {
                                    width: 250px;
                                    height: 200px;
                                    margin-right: 20px;
                                }

                                #boxImg {
                                    display: flex;
                                    flex-wrap: wrap;
                                    flex-direction: row;
                                }

                                .gallery > img {
                                    width: 250px;
                                    margin-right: 20px;
                                }
                            </style>
                      </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả<span style="color:red;"> *</span></label>
                    <textarea class="col-12" name="description" value="{{old('description')}}" id="text_area" cols="30" rows="10"></textarea>
                   
                  </div>
                  @error('description')
                    <div class="" style="color:red;">{{$message}}</div>
                  @enderror
                  
                

                  
                  <div class= "row">
                    <div class="form-group col-6">
                      <label for="exampleInputPassword1">Danh mục<span style="color:red;"> *</span></label>
                      <select name="category_id" value="{{old('category_id')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      @foreach ($categories as $category)
                        <option value="{{$category-> id}}" data-select2-id="3">{{$category-> name}}</option>
                      @endforeach
                      </select>
                      @error('category_id')
                      <div class="" style="color:red;">{{$message}}</div>
                      @enderror
                    </div>
                   
                    <div class="form-group col-6">
                      <label for="exampleInputPassword1">Nhãn hiệu<span style="color:red;"> *</span></label>
                      <select name="brand_id" value="{{old('brand_id')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      @foreach ($brands as $brand)
                        <option value="{{$brand-> id}}" data-select2-id="3">{{$brand-> name}}</option>
                      @endforeach
                      </select>
                      @error('brand_id')
                      <div class="" style="color:red;">{{$message}}</div>
                      @enderror
                    </div>
                    
                    
                    <div class="row">
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Số lượng<span style="color:red;"> *</span></label>
                        <input name="quantity" value="{{old('quantity')}}" type="number" min="1" class="form-control" id="exampleInputEmail1" placeholder="Nhập số lượng">
                        @error('quantity')
                        <div class="" style="color:red;">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Giá nhập vào<span style="color:red;"> *</span></label>
                        <input name="price_input" value="{{old('price_input')}}" type="text" step=".01" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá mua vào">
                        @error('price_input')
                        <div class="" style="color:red;">{{$message}}</div>
                        @enderror
                        </div>
                        
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Giá bán<span style="color:red;"> *</span></label>
                        <input name="price_origin" value="{{old('price_origin')}}" type="text" step=".01" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá gốc">
                        @error('price_origin')
                        <div class="" style="color:red;">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="form-group col-3">
                        <label for="exampleInputPassword1">Giá khuyến mãi<span style="color:red;"> *</span></label>
                        <input name="price_sale" value="{{old('price_sale')}}" type="text" step=".01" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá khuyến mãi">
                        @error('price_sale')
                        <div class="" style="color:red;">{{$message}}</div>
                        @enderror
                        </div>
                       
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Trạng Thái<span style="color:red;"> *</span></label>
                        <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        
                            <option value="1" data-select2-id="3" selected>Còn hàng</option>
                            <option value="2" data-select2-id="3">Hết hàng</option>
                            <option value="3" data-select2-id="3">Ngừng bán</option>
                            
                            
                        
                      </select>
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

      <script>
          function previewImages() {
                var preview = document.querySelector('.gallery');

                if (this.files) {
                    [].forEach.call(this.files, readAndPreview);
                }

                function readAndPreview(file) {
                    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                        return alert(file.name + " is not an image");
                    }

                    var reader = new FileReader();

                    reader.addEventListener("load", function () {
                        var image = new Image();
                        image.title = file.name;
                        image.src = this.result;

                        preview.appendChild(image);
                    });

                    reader.readAsDataURL(file);

                }
            }

            document.querySelector('#listImg').addEventListener("change", previewImages);
      </script>
@endsection
