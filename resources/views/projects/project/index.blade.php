@section('title', 'projects')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Projects</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['name', 'description', 'starting_date', 'ending_date'];
    @endphp

    <x-data-table :data="$projects" :columns="$columns" route='projects' />

</x-app-layout>
