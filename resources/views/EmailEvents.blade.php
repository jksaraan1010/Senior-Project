<!DOCTYPE html>
<html>
   <head>
      <title>Welcome to My Transition </title>
   </head>
   <body>
      Welcome to My Transition Explorer. We hope you enjoy using this application.
      You have these events coming up!
      <br><br>
      @foreach ($Events as $row)
      Event: {{$row ->event_name}}<br>
      @endforeach
      @foreach ($EventDate as $row)
      Date: {{$row ->startDate}} <br>
      @endforeach
      @foreach (  $EventTime as $row)
      Time: {{$row ->startTime}}
      To:   {{$row ->endTime}}
      @endforeach
      <br>
      Sincerely,
      <br>My Transition Explorer Team
   </body>
</html>