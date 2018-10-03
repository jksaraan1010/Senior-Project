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
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th> Name</th>
            <th> Start Time</th>
            <th> End Time </th>
            <th> Edit</th>
            <th> Delete</th>
        </tr>
        </thead>
        @foreach($events as $event)
            <tbody>
            <tr>

                <td>{{$event->event_name}}</td>
                <td>{{$event->start_date}}</td>
                <td>{{$event->end_date}}</td>

                <th><a href="{{route('events.edit', ['events'=>$events->id])}}" class="btn btn-success"> Edit</a>
                </th>
                <th>

                    <form action="{{route('events.destroy', ['events'=>$events->id])}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="Delete" />

                        <button type="submit" class="btn btn-danger" value="Delete" > Delete </button>
                    </form>
                </th>
            </tr>
            </tbody>
        @endforeach
    </table>

</div>


</body>
</html>
