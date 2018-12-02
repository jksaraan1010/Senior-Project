<!DOCTYPE html>
<html>
   <head>
      <title>Welcome to My Transition </title>
   </head>
   <body>
      Welcome to My Transition Explorer. We hope you enjoy using this application.
      You have these events coming up!
      <br><br>
      @foreach ($events as $row)
      Event: {{$row ->event_name}}<br>
      Date And Time : {{$row ->event_time}} 
      @endforeach
      <br>
      Sincerely,
      <br>My Transition Explorer Team
      
   </body>
</html>