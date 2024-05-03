
   
@section('title', 'members')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All Members</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['id','project_title','user_name'];
    @endphp

    <x-data-table :data="$memberData" :columns="$columns" route='' routes='members' />

</x-app-layout>