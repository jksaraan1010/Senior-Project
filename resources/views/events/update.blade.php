<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title> Calendar </title>
</head>

<body>

<div class="container">
    <form action="{{action('EventsController@update',$id)}}" method="post">
        {{csrf_field()}}
        <div style="margin-top:5%;">
            <h1> Update Event</h1>
            <hr>
            <input type="hidden" name="_method" value="Update" />
            <div class="form-group">
                <label> Name of Event </label>
                <input type="text" class="'form-control" name="event_name" placeholder="Event Name" value="{{$events->event_name}}">
            </div>

            <div class="form-group">
                <label> Start Time of Event </label>
                <input type="datetime-local" class="'form-control" name="start_date" placeholder="Event Start Time" value="{{$events->event_name}}">
            </div>

            <div class="form-group">
                <label> End Time of Event </label>
                <input type="datetime-local" class="'form-control" name="end_date" placeholder="Event End Time" value="{{$events->event_name}}">
            </div>

            {{ method_field('put') }}

            <button type="submit" name="submit" class="btn btn-warning"> Update Event </button>

        </div>
    </form>
</div>
</body>
</html>
