@section('title', 'store project')

<x-app-layout>


    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">{{$isUpdate? 'Update Project':'Create Project' }}</h2>

        <form action="{{ $isUpdate ?  route('projects.update',$project) : route('projects.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            @if($isUpdate)
            @method('PUT')
        @endif
            <div class="flex flex-col gap-3">
                <label class="w-full max-w-xs form-control">Name
                    <input type="text" name='name' placeholder="name" value="{{   @old('name')??$project->name  }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                <label class="w-full max-w-xs form-control">Description
                    <input type="text" name='description' placeholder="description" value="{{ @old('description')??$project->description }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                <label class="w-full max-w-xs form-control">Starting Date 
                    <input type="date" name='starting_date' placeholder="starting_date" value="{{ @old('starting_date')??$project->starting_date }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                <label class="w-full max-w-xs form-control">Ending Date
                    <input type="date" name='ending_date' placeholder="ending_date" value="{{ @old('ending_date')??$project->ending_date }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
            </div>

            <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
                <label class="w-full max-w-xs form-control ">Select leader<br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="user_id">
                        <option disabled class="" selected> Select leader</option>
                        @foreach ($users as $user)
                        <option {{ old('user_id') ? (old('user_id') == $user->id ? 'selected' : '') : ($project->user_id == $user->id ? 'selected' : '') }} class="text-gray-500" value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                        
                    </select> </label>
                <label class="w-full max-w-xs form-control ">Select customer <br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="customer_id">
                        <option disabled class="" selected>Select customer</option>
                        @foreach ($customers as $customer)
                        <option {{old('customer_id') ? (old('customer_id') == $customer->id ? 'selected' : '') : ($project->customer_id == $customer->id ? 'selected' : '') }} class="text-gray-500" value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                        
                    </select> </label>
                    
                    <label class="w-full max-w-xs form-control ">Select category <br />
                        <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="category_id">
                            <option disabled class="" selected>Select category</option>
                            @foreach ($categories as $category)
                            <option {{old('category_id') ? (old('category_id') == $category->id ? 'selected' : '') : ($project->category_id == $category->id ? 'selected' : '') }} class="text-gray-500" value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                            
                        </select> </label>
                        
               
                    </div>

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">{{$isUpdate ? 'Update':'Create'}}</button>
                <a href={{ route("projects.index")}} class="btn btn-info md:btn-wide ">Project List</a>
                <a href={{ route("customers.create")}}  class="btn btn-warning md:btn-wide ">Add New Customer</a>
            </div>

        </form>
    </div>
</x-app-layout>
