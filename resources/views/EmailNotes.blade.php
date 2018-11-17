<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Transition </title>
</head>

<body>
Welcome to My Transition Explorer. We hope you enjoy using this application. Below are your notes!
<br><br>
@foreach ($storedNotes as $row)
    {{$row ->name}}
@endforeach


Sincerely,
<br>My Transition Explorer Team

</body>

</html>