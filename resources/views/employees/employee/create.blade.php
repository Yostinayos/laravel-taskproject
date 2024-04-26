
@section('title', 'store employee')

<x-app-layout>
    


    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">Create Employee</h2>

        <form action="{{ route('employees.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            <div class="flex flex-col gap-3">
                <div class="flex flex-col gap-3 flex-wrap md:flex-row grow">
                    <label class="w-full max-w-xs form-control ">Select name<br />
                        <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select ">
                            <option disabled class="" selected> Select name </option>
                            @foreach ($users as $user)
                    <option class="text-gray-500" value="{{ $user->name }}
                        name='name'">{{ $user->name }}</option>
                    @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                     @enderror
                @endforeach
                            
                        </select> </label>
                        <div class="flex flex-col gap-3 flex-wrap md:flex-row grow">
                            <label class="w-full max-w-xs form-control ">Select name<br />
                                <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select ">
                                    <option disabled class="" selected> Select name</option>
                                    @foreach ($users as $user)
                            <option class="text-gray-500" name='user_id' value="{{ $user->id }}">{{ $user->name }}</option>
                            @error('user_id')
                            <p class="text-red-600">{{ $message }}</p>
                             @enderror
                        @endforeach
                                    
                                </select> </label>
                        </div>
                <label class="w-full max-w-xs form-control">Position
                    <input type="text" name='position' placeholder="position" value="{{ @old('position') }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                @error('position')
                <p class="text-red-600">{{ $message }}</p>
                 @enderror
                <label class="w-full max-w-xs form-control">Salary 
                    <input type="text" name='salary' placeholder="salary" value="{{ @old('salary') }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                @error('salary')
                <p class="text-red-600">{{ $message }}</p>
                 @enderror
            </div>

          

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">Create</button>
                
            </div>

        </form>
    </div>
    </div>
</x-app-layout>
