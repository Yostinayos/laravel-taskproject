@section('title', ' store role')

<x-app-layout>
  
  

    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">{{'Create Role' }}</h2>

        <form action="{{  route('roles.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
          
            {{-- <div class="flex flex-col gap-3"> --}}
                <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
                    
                    
    
                    </label>
                <label class="w-full max-w-xs form-control"> Role
                    <input type="text" name='role' placeholder="role" value="{{   @old('role') }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                      </label>
                
                 
            </div>

            <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
               
               
                    </div>

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">{{'Create'}}</button>
                <a href={{ route("employees.index")}} class="btn btn-info md:btn-wide ">Employee List</a>
                <a href={{ route("employees.create")}}  class="btn btn-warning md:btn-wide ">Add New Employee</a>
            </div>

        </form>
    </div>
</x-app-layout>
