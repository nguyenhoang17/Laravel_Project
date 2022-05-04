<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Log in</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="../../backend/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../../backend/dist/css/adminlte.min.css?v=3.2.0">
<script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwTG9nJTIwaW4lMjIlMkMlMjJ3JTIyJTNBMTI4MCUyQyUyMmglMjIlM0E3MjAlMkMlMjJqJTIyJTNBNjA5JTJDJTIyZSUyMiUzQTEyODAlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGcGFnZXMlMkZleGFtcGxlcyUyRmxvZ2luLmh0bWwlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRiUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtNDIwJTJDJTIycSUyMiUzQSU1QiU1RCU3RA=="></script><script nonce="f57a4947-7124-4b2c-80b4-138142e4590d">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body class="login-page" style="min-height: 496.802px;">
    @if($errors-> any())
            <div class="alert alert-outline-danger" style="color:red;text-align: left; margin-top:20px;"><ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error ."!"}}</li>
                @endforeach
                </ul></div>

    @endif
<div class="login-box">
<div class="login-logo">
<a style="color:orange" href="../../index2.html"><b>Hoang Shoes</b></a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Login for shopping!!!</p>
<form action="{{route('auth.login')}}" method="post">
@csrf
<div class="input-group mb-3">
<input name="email" type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
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
<div class="row">
<div class="col-8">
<div class="icheck-warning">
<input type="checkbox" id="remember" name="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-warning btn-block" style="color:white;">Login</button>
</div>

</div>
</form>
<div class="social-auth-links text-center mb-3">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
</a>
</div>

<p class="mb-1">
<a style="color:orange" href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a style="color:orange" href="{{route('auth.register')}}" class="text-center">Register a new membership</a>
</p>
</div>

</div>
</div>


<script src="../../backend/plugins/jquery/jquery.min.js"></script>

<script src="../../backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../backend/dist/js/adminlte.min.js?v=3.2.0"></script>


</body></html>