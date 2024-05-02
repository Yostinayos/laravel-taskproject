
  @props(['data', 'columns','route','routes'=>''])
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
        @php
            
        @endphp
        @foreach($data as $item)
        <tr>
            @foreach($columns as $column)
                <td>{{ $item->{$column} }}</td>
            @endforeach
            <td>
                @if($route)
                <a>
                  
                    <a href='{{route($route.'.show', $item->id)}}' class='btn btn-primary'>
                        <i class="fa fa-eye"></i>
                    </a>
                </a>
                @else
                <form action="{{route($routes.'.destroy', $item->id)}}" method="post" class="inline-block" >
                    @csrf
                    @method('DELETE')
                <button class='mt-3 btn btn-neutral'> <i class="fa fa-trash"></i></button>    
                </form>
              
        
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  </div>