<!DOCTYPE html>
<!-- saved from url=(0065)https://adminlte.io/themes/dev/AdminLTE/pages/examples/login.html -->
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Log in</title>
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
    <body class="hold-transition login-page" >
        <div style="background-image: url('/registerimg.jpg'); background-repeat: no-repeat; background-size: cover; height:100%;background-position: center center;">
            <div class="mask d-flex flex-grow-1  align-items-center rgba-blue-strong">
                <div class="login-box">
                    <div class="">
                        <!-- landing url go below -->
                        <h2 class="text-center text-white text-uppercase font-weight-bold mt-1 mb-2 pt-3">My Transition Explorer</h2>
                    </div>
                    <!-- /.login-logo -->
                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Sign In To Start Your Session</p>
                            @if(Session::has('success'))
                            <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                {{Session::get('success')}}
                            </div>
                            @elseif(Session::has('error'))  
                            <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                {{Session::get('error')}}
                            </div>
                            @endif
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="fa fa-envelope input-group-text"></span>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="fa fa-lock input-group-text"></span>
                                    </div>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="checkbox icheck">
                                            <label>
                                            <input type="checkbox"> Remember Me
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
                            <p class="mb-1">
                                <a href="{{ route('password.request') }}">I forgot my password</a>
                            </p>
                            <p class="mb-0">
                                <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
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
                </script>
            </div>
        </div>
    </body>
</html>