<!DOCTYPE html>
<!-- saved from url=(0068)https://adminlte.io/themes/dev/AdminLTE/pages/examples/register.html -->
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>My Transition Explorer</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <title>Log in</title>
      <!-- Tell the browser to be responsive to screen width -->
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="{{ asset('Landing-Page-Template-Bootstrap-master/css/bootstrap.min.css') }}">
      <!-- Material Design Bootstrap -->
      <link rel="stylesheet" href="{{ asset('Landing-Page-Template-Bootstrap-master/css/mdb.min.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('adminlte/css/font-awesome.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{asset('adminlte/css/ionicons.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{asset('adminlte/css/blue.css')}}">
      <!-- Google Font: Source Sans Pro -->
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
         .invalid-feedback {
         display: block;
         }
      </style>
   </head>
   <body class="hold-transition register-page">
      <div style="background-image: url('/terms.jpg'); background-repeat: no-repeat; background-size: cover; height:100%;background-position: center center;">
         <div class="mask d-flex flex-grow-1 align-items-center rgba-blue-strong">
         <div class="container h-100">
              <div class="row h-100 justify-content-center align-items-center">
               
            <div class="card col-8">
                  <div class="card-body register-card-body">
                  <h5 class="text-center text-blue text-uppercase font-weight-bold mt-1 mb-2 pt-3">My Transition Explorer</h5>
                     <p class="login-box-msg">Terms & Conditions</p>
                     <div class="row">
                     <div class="terms_description">
              @if(count($terms) > 0)
                {!! $terms[0]->description !!}
              @endif
            </div>
        </div>
                <div>        
            <a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Back</a>
                  </div>
                  <!-- /.form-box -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.register-box -->
         </div>
         </section>
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
         <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      </div>
      </div>
   </body>
</html>
