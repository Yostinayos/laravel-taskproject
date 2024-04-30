



@section('title', 'roles')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Roles</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['role'];
    @endphp

    <x-data-table :data="$roles" :columns="$columns" route='' routes='roles' />

</x-app-layout>
