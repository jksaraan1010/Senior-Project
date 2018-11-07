<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Terms</title>
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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style type="text/css">
   .invalid-feedback {
      display: block;
    }
  .terms_card{
    padding: 20px!important;
  }
  .card-title {
    margin-bottom: 1.75rem;
        font-size: 20px;
    font-weight: 900;
 /*   border-bottom: 1px solid black;*/
  }
  .terms_title{
   border-bottom: 1px solid #E2E2E2;
  }
  .terms_description{
    margin-top: 20px;
  }
</style>
</head>
<body class="hold-transition login-page">

  <div class="login-logo">
    <P> Terms and Condition</a>
  </div>

  <div class="card-body login-card-body">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <!-- <h3 class="page-title">Terms and Condition</h3> -->
        <div class="card terms_card">
          <div class="card-block">
            <div class="terms_title">
              <h2 class="card-title">Terms</h2>
            </div>
            <div class="terms_description">
              @if(count($terms) > 0)
                {!! $terms[0]->description !!}
              @endif
            </div>
          </div>
        </div>
    </div>
    <div class="terms">
    <a href="{{ url()->previous() }}" class="btn btn-xs btn-danger">Back</a>
    </div>
    </div>


  </div>
</div>





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


</body></html>

