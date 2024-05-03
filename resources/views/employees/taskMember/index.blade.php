
   
@section('title', 'taskMembers')

<x-app-layout>
    <h2 class='px-4 py-3 mt-3'>All  Task Members</h2>
 @if(session('success'))
 <h3 class="alert alert-success"> {{ session('success')}}
      
 </h3>
 @endif
    @php
        $columns = ['id','task_title','user_name'];
    @endphp

    <x-data-table :data="$taskMemberData" :columns="$columns" route='' routes='taskMembers' />

</x-app-layout>