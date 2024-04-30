@section('title', 'store task')

<x-app-layout>


    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">{{$isUpdate? 'Update task':'Create task' }}</h2>

        <form action="{{ $isUpdate ?  route('tasks.update',$task) : route('tasks.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            @if($isUpdate)
            @method('PUT')
        @endif
            <div class="flex flex-col gap-3">
                <label class="w-full max-w-xs form-control">Title
                    <input type="text" name='title' placeholder="title" value="{{   @old('title')??$task->title  }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </label>
                <label class="w-full max-w-xs form-control">Description
                    <input type="text" name='description' placeholder="description" value="{{ @old('description')??$task->description }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </label>
                <label class="w-full max-w-xs form-control">Starting Date 
                    <input type="date" name='starting_date' placeholder="starting_date" value="{{ @old('starting_date')??$task->starting_date }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('starting_date')" class="mt-2" />

                    </label>
                <label class="w-full max-w-xs form-control">Ending Date
                    <input type="date" name='ending_date' placeholder="ending_date" value="{{ @old('ending_date')??$task->ending_date }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('ending_date')" class="mt-2" />

                    </label>
            </div>

            <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
                <label class="w-full max-w-xs form-control ">Select project<br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="project_id">
                        <option disabled class="" selected> Select project</option>
                        @foreach ($projects as $project)
                        <option {{ old('project_id') ? (old('project_id') == $project->id ? 'selected' : '') : ($task->project_id == $project->id ? 'selected' : '') }} class="text-gray-500" value="{{ $project->id }}">{{ $project->name }}</option>
                        @endforeach
                        
                    </select> 
                    <x-input-error :messages="$errors->get('project_id')" class="mt-2" />

                </label>
                <label class="w-full max-w-xs form-control ">Select category <br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="category_id">
                        <option disabled class="" selected>Select category</option>
                        @foreach ($categories as $category)
                        <option {{old('category_id') ? (old('category_id') == $category->id ? 'selected' : '') : ($task->category_id == $category->id ? 'selected' : '') }} class="text-gray-500" value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                        
                    </select> 
                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </label>
                    
                        
               
                    </div>

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">{{$isUpdate ? 'Update':'Create'}}</button>
                <a href={{ route("projects.index")}} class="btn btn-info md:btn-wide ">Project List</a>
                <a href={{ route("projects.create")}}  class="btn btn-warning md:btn-wide ">Add New project</a>
            </div>

        </form>
    </div>
</x-app-layout>
