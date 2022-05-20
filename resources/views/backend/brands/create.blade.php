@extends('backend.layouts.master')
@section('title')
    Thêm nhãn hiệu
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
            <h1 class="m-0">Thêm nhãn hiệu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm nhãn hiệu</li>
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
              <form class="" method="POST" action="{{route('backend.brands.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên nhãn hiệu<span style="color:red;"> *</span></label>
                    <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                    @error('name')
                      <div style="color: red;" class="">{{$message}}</div>
                    @enderror
                  </div>
        
                  <div class="form-group">
                        <label for="exampleInputFile">Hình ảnh nhãn hiệu<span style="color:red;"> *</span></label>
                        <div class="input-group">
                            <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="listImg"
                                         name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div> -->
                        </div>
                        <div class="gallery d-flex flex-wrap" style="margin-top: 20px;"></div>
                            @error('image')
                            <div style="color: red;" class="">{{$message}}</div>
                            @enderror
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
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a href= "{{route('backend.brands.index')}}" type="button" class="btn btn-outline-secondary">Hủy</a>
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