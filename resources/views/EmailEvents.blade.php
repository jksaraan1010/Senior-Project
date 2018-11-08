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