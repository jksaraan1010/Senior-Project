
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet"  href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title> Calendar </title>
</head>

<body>
<div class="container">

    {{-- Success Alert --}}
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{ Session::get('success') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- If the page has any errors passed to it --}}
    @if(count($errors) > 0)

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Errors:</strong>

            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="background: #013E86; color: white;">
                    My Reminders Calendar
                </div>
                <div class="panel-body">

                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}

                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row-sm-8">
        <a href="/add"  class="btn btn-success" style="margin:5px">Add An Event</a>
        <a href="/edit" class="btn btn-warning" style="margin:5px">Edit An Event</a>
        <a href="/delete " class="btn btn-danger" style="margin:5px">Delete An Event</a>
    </div>




</div>
</body>

</html>
