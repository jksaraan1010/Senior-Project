<h1 class="m-0 text-dark">Assessment Results</h1>
<table class="table table-striped table-hover table-bordered">
   <th>Assessment Date Taken</th>
   <th>Assessment Result</th>
   <tbody>
      <tr>
         @if (count($results) > 0)
         @foreach ($results as $result)
      <tr>
         @if(Auth::user()->isAdmin())
         <td>{{ $result->user->name}} ({{$result->user->email}})</td>
         @endif
         <td>{{ $result->created_at->format('d M Y H:i:A') }}</td>
         </td>
         <td>
            {{ $result->result }} / 12
         </td>
         @endforeach
         @endif
   </tbody>
   
</table>