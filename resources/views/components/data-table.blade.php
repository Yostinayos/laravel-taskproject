
  @props(['data', 'columns','route'])
  <div class="overflow-x-auto">
<table class="table">
    <thead>
        <tr>
            @foreach($columns as $column)
                <th>{{ ucfirst($column) }}</th>
            @endforeach
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            @foreach($columns as $column)
                <td>{{ $item->{$column} }}</td>
            @endforeach
            <td>
                <a>
                    <a href='{{route($route.'.show', $item->id)}}' class='btn btn-neutral'>
                        <i class="fa fa-eye"></i>
                    </a>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  </div>