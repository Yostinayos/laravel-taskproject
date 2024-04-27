
@section('title', ' employees')

<x-app-layout>


    @foreach($employees as $employee)
    {{$employee->name}}
    <hr>
    {{$employee->position}}
    <hr>
    {{$employee->salary}}
    <hr>
    <div class="col-span-2 mt-3 mb-4 mr-2">
                    
        <a href='{{route("employees.show", $employee->id)}}' class='btn btn-neutral'>
            <i class="fa fa-eye"></i>
        </a>

    
</div>
    @endforeach

</x-app-layout>