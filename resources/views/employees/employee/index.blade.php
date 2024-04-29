


@section('title', 'employees')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Employees</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['name',',','position','salary'];
    @endphp

    <x-data-table :data="$employees" :columns="$columns" route='employees' />

</x-app-layout>
