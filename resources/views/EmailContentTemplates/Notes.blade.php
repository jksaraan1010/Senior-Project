@if (count($storedNotes) > 0)

<div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">List of Notes</h3>
         </div>
          <!-- /.card-header -->
     <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <tr>
                <th>Note</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              @foreach ($storedNotes as $storedNotes)
              <tr>
                 <td>{{ $storedNotes->name }}</td>