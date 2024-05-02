
@section('title', 'Categories')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Categories</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['category'];
    @endphp

    <x-data-table :data="$categories" :columns="$columns" route='' routes='categories' />

</x-app-layout>