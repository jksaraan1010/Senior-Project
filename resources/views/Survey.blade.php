@section('content')
<div class = "row">
  <div class = "col-md-12">
  <br />
  <h3 align="center"> Survey </h3>
  <br />
  <table class ="table table-bordered" border = 1>
  <tr >
    <th> Question </th>
    <th> Yes </th>
    <th> No </th>
  </tr>
  <?php
  $arrlength = count($questions);
  for($x=0; $x<$arrlength; $x++)
  {
    $idQuestions = $questions[$x];
  }
      ?>
    @foreach($questions as $rows ) 
    {{ Form::open(array('url' => '/survey')) }}
         <form action = "SurveyController@getQuestions.php" method = "post">
         <input type = "hidden" name = "_token"  value = "<?php echo csrf_token(); ?>">
    <tr>
      <td> {{$rows->Question}} </td>
      <td><input type="radio"  name = answer value = "1"> Yes <td>
      <td><input type = "radio"  name = "answer" value = "0"> No </td>

      {{ Form::close() }}
      @endforeach

    </tr>
      </tr>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>      

</script>


   </div>
    </div>



