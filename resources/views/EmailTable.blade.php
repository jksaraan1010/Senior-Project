<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Transition </title>
</head>

<body>
Welcome to My Transition Explorer. We hope you enjoy using this application. Below is a table of your previous survey scores!
<br><br>

<table class="table table-striped table-hover table-bordered">

        <tbody>
        <tr>
            <th scope="row">Date Taken</th>
            @foreach($tableDate as $row)
                <td>
                    {{$row->dateTaken}}
                </td>
            @endforeach
        </tr>
       
        <tr>
            <th scope="row">Self Care Score</th>
            @foreach($tableSection12 as $row)
                <td>
                    {{$row->result}}

                </td>
            @endforeach
        </tr>
        <tr>
            <th scope="row">Health Awareness Score</th>
            @foreach(  $tableSection13 as $row)
                <td>
                    {{$row->result}}
                </td>
            @endforeach
        </tr>
        <tr>
            <th scope="row">Communication Score</th>
            @foreach( $tableSection14 as $row)
                <td>
                    {{$row->result}}
                </td>
            @endforeach
        </tr>
        <tr>
            <th scope="row">Total Score</th>

            @foreach($tableForScores as $row)
                <td class="text-bold">
                    {{$row->result}}
                </td>
            @endforeach
        </tr>
        </tbody>
    </table>
    <br><br>
Sincerely,
<br>My Transition Explorer Team
</body>

</html>