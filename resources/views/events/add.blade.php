<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Laravel</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading text-center" style="background: #013E86; color: white;">
                Add Event
            </div>

            <div class="panel-body">
                <h1> Add Event Information</h1>



                <form action="{{route('events.store')}}" method="post">
                    {{csrf_field()}}
                    <div>
                         <label for=""> Enter Event Name</label>
                         <input class="form-control" name="newEventName" type="text" placeholder="Event Name">
                    </div>
                     <div>
                        <label for=""> Enter Event Start Time</label>
                         <input class="form-control" name="newEventStartDate" type="datetime-local" placeholder="Event Start Time">
                     </div>
                    <div>
                         <label for=""> Enter Event End Time</label>
                         <input class="form-control" name="newEventEndDate" type="datetime-local" placeholder="Event End Time">
                    </div>
                    <br>
                    <div>
                         <input class="btn btn-primary" name="Submit" type="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


</body>

</html>
