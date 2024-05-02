@section('title', 'tasks')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Tasks</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif


    @php
        $columns = ['title', 'description', 'starting_date', 'ending_date','project','category' ];
        
    @endphp

    <x-data-table :data="$data" :columns="$columns" route='tasks' />

</x-app-layout>
