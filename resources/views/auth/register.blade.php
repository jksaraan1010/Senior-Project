<!DOCTYPE html>
<!-- saved from url=(0068)https://adminlte.io/themes/dev/AdminLTE/pages/examples/register.html -->
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Registration Page</title>
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
      <div style="background-image: url('/registimg.jpg'); background-repeat: no-repeat; background-size: cover; height:100%;background-position: center center;">
         <div class="mask d-flex flex-grow-1 align-items-center rgba-blue-strong">
            <div class="register-box">
            <div class="">
                  <!-- landing url go below -->
                  <h2 class="text-center text-white text-uppercase font-weight-bold mt-1 mb-2 pt-3">My Transition Explorer</h2>
               </div>
               <div class="card">
                  <div class="card-body register-card-body">
                     <p class="login-box-msg">Register A New Membership</p>
                     <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                           <div class="input-group-append">
                              <span class="fa fa-user input-group-text"></span>
                           </div>
                           @if ($errors->has('name'))
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('name') }}</strong>
                           </span>
                           @endif
                        </div>
                        <div class="input-group mb-3">
                           <input type="email" class="form-control" placeholder="Email Address" required name="email">
                           <div class="input-group-append">
                              <span class="fa fa-envelope input-group-text"></span>
                           </div>
                           @if ($errors->has('email'))
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('email') }}</strong>
                           </span>
                           @endif
                        </div>
                        <div class="input-group mb-3">
                           <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                           <div class="input-group-append">
                              <span class="fa fa-lock input-group-text"></span>
                           </div>
                           @if ($errors->has('password'))
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('password') }}</strong>
                           </span>
                           @endif
                        </div>
                        <div class="input-group mb-3">
                           <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Enter Password Again" required>
                           <div class="input-group-append">
                              <span class="fa fa-lock input-group-text"></span>
                           </div>
                        </div>
                        <!--   <div class="input-group mb-3">
                           <input type="text" class="dob form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus placeholder="Enter Date Of Birth">
                           
                           <div class="input-group-append">
                             <span class="fa fa-calendar input-group-text"></span>
                           </div>
                           @if ($errors->has('dob'))
                           <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('dob') }}</strong>
                           </span>
                           @endif
                           </div> -->
                        <div class="input-group mb-3">
                           <select name="role" class="form-control"  required>
                              @foreach($roles as $role)
                              <option value="{{$role->id}}">{{$role->title}}</option>
                              @endforeach
                           </select>
                           <div class="input-group-append">
                              <span class="fa fa-users input-group-text"></span>
                           </div>
                           @if ($errors->has('role'))
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('role') }}</strong>
                           </span>
                           @endif
                        </div>
                        <div class="row">
                           <div class="col-8">
                              <div class="checkbox">
                                 <label>
                                  <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;" required><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> I agree to the <a href="{{ route('terms.show') }}" target="_blank">terms</a>
                                 </label>
                              </div>
                           </div>
                           <!-- /.col -->
                           <div class="col-4">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                           </div>
                           <!-- /.col -->
                        </div>
                     </form>
                     <a href="{{url('login')}}" class="text-center">I already have a membership</a>
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
         <script type="text/javascript">
            $(document).ready(function(){
              $('.dob').datepicker({
                format: 'yyyy-mm-dd',
                changeMonth: true, 
                changeYear: true, 
                yearRange: '1950:2018',
              });
            });
            
         </script>
      </div>
      </div>
   </body>
</html>