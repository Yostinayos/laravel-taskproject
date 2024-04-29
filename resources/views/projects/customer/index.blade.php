@section('title', 'customers')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Customers</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['name', 'email', 'phone', 'phone2'];
    @endphp

    <x-data-table :data="$customers" :columns="$columns" route='customers' />

</x-app-layout>