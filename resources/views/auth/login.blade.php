<!DOCTYPE html>
<!-- saved from url=(0065)https://adminlte.io/themes/dev/AdminLTE/pages/examples/login.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link href="{{ asset('Landing-Page-Template-Bootstrap-master/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('Landing-Page-Template-Bootstrap-master/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
 <link rel="stylesheet" href="{{asset('adminlte/css/font-awesome.min.css')}}">
 <!-- Ionicons -->
 <link rel="stylesheet" href="{{asset('adminlte/css/ionicons.min.css')}}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
 <!-- iCheck -->
 <link rel="stylesheet" href="{{asset('adminlte/css/blue.css')}}">
 <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <style type="text/css">
   html, body {
      height: 100%;
    }
    .flex-fill {
    flex:1;
}
.mask {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    
    width: 100%;
    height: 100%;
    background-attachment: fixed; }

    </style>


</head>
<body class="hold-transition login-page" >
<div style="background-image: url('/registerimg.jpg'); background-repeat: no-repeat; background-size: cover; height:100%;background-position: center center;">
  <div class="mask d-flex flex-grow-1 justify-content-center align-items-center rgba-blue-strong">
<div class="login-box">
 <div class="login-logo">
   <!-- landing url go below -->
  <a class="text-center text-white text-uppercase font-weight-bold mt-5 mb-5 pt-3"><b>My Transition Explorer  </b></a> </div>
 <!-- /.login-logo -->
 <div class="card">
   <div class="card-body login-card-body">
     <p class="login-box-msg">Sign in to start your session</p>

     <form action="{{url('login')}}" method="post">
     @csrf
       <div class="input-group mb-3">
         <input type="email" class="form-control" name="email" placeholder="Email">
         <div class="input-group-append">
             <span class="fa fa-envelope input-group-text"></span>
         </div>
       </div>
       <div class="input-group mb-3">
         <input type="password" class="form-control" name="password" placeholder="Password">
         <div class="input-group-append">
             <span class="fa fa-lock input-group-text"></span>
         </div>
       </div>
       <div class="row">
         <div class="col-8">
           <div class="checkbox icheck">
             <label>
               <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-4">
           <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
         </div>
         <!-- /.col -->
       </div>
     </form>

     <!-- /.social-auth-links -->

     <p class="mb-1">
       <a href="{{ route('auth.password.reset') }}">I forgot my password</a>
     </p>
     <p class="mb-0">
       <a href="{{ route('auth.register') }}" class="text-center">Register a new membership</a>
     </p>
   </div>
   <!-- /.login-card-body -->
 </div>
</div>
<!-- /.login-box -->
  
<!-- jQuery -->
<script src="{{asset('adminlte/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('adminlte/js/icheck.min.js')}}"></script>
<script>
 $(function () {
   $('input').iCheck({
     checkboxClass: 'icheckbox_square-blue',
     radioClass   : 'iradio_square-blue',
     increaseArea : '20%' // optional
   })
 })
</script>

    <!-- JQuery -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./public/Landing-Page-Template-Bootstrap-master/js/mdb.min.js"></script>

    <script>
      
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
</div>
</div>

</body></html>