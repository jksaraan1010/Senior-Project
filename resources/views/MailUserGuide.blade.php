<!doctype html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>My Transition Explorer</title>
   <!-- Bootstrap core CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
   <div class="container" style="margin-top: 100px; width: 600px;">
      <h2 class="text-center"> Email User Guide!  </h2>
      <br><br>
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{session('success')}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      @endif
      @if(count($errors)>0)
      @foreach($errors->all() as $error)
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{$error}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
      </div>
      @endforeach
      @endif
      <form action="sendUserGuide" method="POST">
         {{ csrf_field() }}
         <div class="form-group">
            <input type="email" class="form-control text-center" placeholder="Provide an email" name="email"><br>
            <button type="submit" class="btn btn-primary btn-md" style="margin-left: 0px;margin: auto; display: block;"t>SEND</button>
         </div>
      </form>
   </div>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>