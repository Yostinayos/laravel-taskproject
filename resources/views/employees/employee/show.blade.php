
@section('title', ' employees')

<x-app-layout>


    
    {{$employee->name}}
    <hr>
    {{$employee->position}}
    <hr>
    {{$employee->salary}}
    <hr>
    <div class="col-span-2 mr-2 mt-3 mb-4">
                    
        <a href='{{route("employees.edit", $employee->id)}}' class='btn btn-neutral'>
            <i class="fa fa-pencil"></i>
        </a>


        <form action="{{route("employees.destroy", $employee->id)}}" method="post" class='btn btn-neutral'>
            @csrf
            @method('DELETE')
            <i class="fa fa-trash"></i></form>
      


        
        @if ($errors->any())
        @foreach ($errors->all() as $error )
            <p class="alert bg-red-300 text-red-900">{{ $error }}</p>
        @endforeach
    @endif
</div>
   

</x-app-layout>