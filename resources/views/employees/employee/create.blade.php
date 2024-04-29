


@section('title', ' store employee')

<x-app-layout>
  @if(session('fail'))
  
@endif
    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">{{$isUpdate? 'Update Employee':'Create Employee' }}</h2>

        <form action="{{ $isUpdate ?  route('employees.update',$employee) : route('employees.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            @if($isUpdate)
            @method('PUT')
        @endif
            <div class="flex flex-col gap-3">
                <label class="w-full max-w-xs form-control ">Select name<br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name='user_id'>
                        <option disabled class="" selected> Select name</option>
                        @foreach ($users as $user)
                <option class="text-gray-500"  value="{{$user->id}}">{{ $user->name }}</option>
                
            @endforeach
                        
                <label class="w-full max-w-xs form-control"> Position
                    <input type="text" name='position' placeholder="position" value="{{   @old('position')??$employee->position  }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('position')" class="mt-2" />
                      </label>
                <label class="w-full max-w-xs form-control">Salary
                    <input type="text" name='salary' placeholder="salary" value="{{ @old('salary')??$employee->salary }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('salary')" class="mt-2" />
                      </label>
                 
            </div>

            <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
               
               
                    </div>

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">{{$isUpdate ? 'Update':'Create'}}</button>
                <a href={{ route("projects.index")}} class="btn btn-info md:btn-wide ">Project List</a>
                <a href={{ route("projects.create")}}  class="btn btn-warning md:btn-wide ">Add New Project</a>
            </div>

        </form>
    </div>
</x-app-layout>
