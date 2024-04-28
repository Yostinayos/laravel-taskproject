
  @props(['data', 'columns','route'])
  <div class="p-3 overflow-x-auto">
<table class="table">
    <thead>
        <tr>
            @foreach($columns as $column)
                <th class="font-bold dark:text-white">{{ ucfirst($column) }}</th>
            @endforeach
            <th class="font-bold dark:text-white">Action</th>
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
                    <a href='{{route($route.'.show', $item->id)}}' class='btn btn-primary'>
                        <i class="fa fa-eye"></i>
                    </a>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  </div>