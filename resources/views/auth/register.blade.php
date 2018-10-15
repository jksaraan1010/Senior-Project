<!DOCTYPE html>
<!-- saved from url=(0068)https://adminlte.io/themes/dev/AdminLTE/pages/examples/register.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Registration Page</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('adminlte/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('adminlte/css/ionicons.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('adminlte/css/blue.css')}}">
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
       <!-- landing url go below -->
      <a href=""><b>My Transition Explorer  </b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="{{url('register')}}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name" required>
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
            <input type="email" class="form-control" placeholder="Email" required name="email">
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
            <input type="password" name="password" class="form-control" placeholder="Password" required>
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
            <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="dob form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus placeholder="Enter Date Of Birth">

            <div class="input-group-append">
              <span class="fa fa-calendar input-group-text"></span>
            </div>
            @if ($errors->has('dob'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('dob') }}</strong>
            </span>
            @endif
          </div>
          <div class="input-group mb-3">
            <select name="role" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" required>
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
              <div class="checkbox icheck">
                <label>
                  <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> I agree to the <a href="">terms</a>
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
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

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
</body></html>