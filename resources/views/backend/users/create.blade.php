<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HoangShoes | Thêm tài khoản</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="../../../backend/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../../backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../../../backend/dist/css/adminlte.min.css?v=3.2.0">
<script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwUmVnaXN0cmF0aW9uJTIwUGFnZSUyMiUyQyUyMnclMjIlM0ExMjgwJTJDJTIyaCUyMiUzQTcyMCUyQyUyMmolMjIlM0E2MDklMkMlMjJlJTIyJTNBMTI4MCUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZwYWdlcyUyRmV4YW1wbGVzJTJGcmVnaXN0ZXIuaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRnd3dy5nb29nbGUuY29tJTJGJTIyJTJDJTIyayUyMiUzQTI0JTJDJTIybiUyMiUzQSUyMlVURi04JTIyJTJDJTIybyUyMiUzQS00MjAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE"></script><script nonce="ca243d0c-f03f-4094-a776-fd8aa6a1db5a">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body class="register-page" style="min-height: 570.802px;">
    @if($errors-> any())
            <div class="alert alert-outline-danger" style="color:red;text-align: left; margin-top:20px;"><ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error ."!"}}</li>
                @endforeach
                </ul></div>

    @endif
<div class="register-box">
<div class="register-logo">
<a href="../../index2.html"><b>HoangShoes</b></a>
</div>
<div class="card">
<div class="card-body register-card-body">
<p class="login-box-msg">Đăng ký tài khoản mới</p>
<form action="{{ route('backend.users.store') }}" method="post" enctype="multipart/form-data">
@csrf

<div class="input-group mb-3">
<input name="name" type="text" class="form-control" placeholder="Full name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input name="email" type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input name="address" type="text" class="form-control" placeholder="Address">
<div class="input-group-append">
<div class="input-group-text">
<span><i class="fa-solid fa-house"></i></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<select id="roles" name="role">
  <option selected value="user">Khách hàng</option>
  <option value="admod">Quản trị viên</option>
  
</select>
<div class="input-group-append">
<div class="input-group-text">
<span><i class="fa-solid fa-book"></i></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input name="phone" type="text" class="form-control" placeholder="Phone">
<div class="input-group-append">
<div class="input-group-text">
<span><i class="fa-solid fa-phone"></i></span>
</div>
</div>
</div>

<div class="form-group">
<label for="exampleInputFile"></label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" name="image">
<label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
</div>
</div>
</div>

<div class="input-group mb-3">
<input name="password" type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">


<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Thêm tài khoản</button>
</div>

</div>
</form>


</div>

</div>
</div>


<script src="../../../backend/plugins/jquery/jquery.min.js"></script>

<script src="../../../backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../../backend/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="https://kit.fontawesome.com/4829a23a17.js" crossorigin="anonymous"></script>


</body></html>