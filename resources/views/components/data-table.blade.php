
  @props(['data', 'columns'])
  <div class="overflow-x-auto">
<table class="table">
    <thead>
        <tr>
            @foreach($columns as $column)
                <th>{{ ucfirst($column) }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $project)
        <tr>
            @foreach($columns as $column)
                <td>{{ $project->{$column} }}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
  </div>