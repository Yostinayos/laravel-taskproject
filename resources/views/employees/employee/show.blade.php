
@section('title', ' employees')

<x-app-layout>


    
    {{$employee->name}}
    <hr>
    {{$employee->position}}
    <hr>
    {{$employee->salary}}
    <hr>
    <div class="col-span-2 mt-3 mb-4 mr-2">
                    
        <a href='{{route("employees.edit", $employee->id)}}' class='btn btn-neutral'>
            <i class="fa fa-pencil"></i>
        </a>


        <form action="{{route("employees.destroy", $employee->id)}}" method="post" class="inline-block" >
            @csrf
            @method('DELETE')
        <button class='btn btn-neutral'> <i class="fa fa-trash"></i></button>    
        </form>
      


        
        @if ($errors->any())
        @foreach ($errors->all() as $error )
            <p class="text-red-900 bg-red-300 alert">{{ $error }}</p>
        @endforeach
    @endif
</div>
   

</x-app-layout>