
@section('title', ' store member')

<x-app-layout>
  
  

    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">Create member </h2>

        <form action="{{  route('members.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
    
                    <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
                        <label class="w-full max-w-xs form-control ">Select Member<br />
                            <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="user_id">
                                <option disabled class="" selected> Select Member</option>
                                @foreach ($users as $user)
                                <option {{ old('user_id') ? (old('user_id') == $user->id ? 'selected' : '') : ($member->user_id == $user->id ? 'selected' : '') }} class="text-gray-500" value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                                
                            </select> 
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        
                        </label>
                        <label class="w-full max-w-xs form-control ">Select Project <br />
                            <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select " name="project_id">
                                <option disabled class="" selected>Select Project</option>
                                @foreach ($projects as $project)
                                <option {{old('project_id') ? (old('project_id') == $project->id ? 'selected' : '') : ($member->project_id == $project->id ? 'selected' : '') }} class="text-gray-500" value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                                
                            </select> 
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                            </label>
                            
                             
                       
                            </div>
        
                    
                 
            

            
               <div></div>
               

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">{{'Create'}}</button>
                <a href={{ route("projects.index")}} class="btn btn-info md:btn-wide ">Project List</a>
                <a href={{ route("projects.create")}}  class="btn btn-warning md:btn-wide ">Add New Project</a>
            </div>

        </form>
    </div>
</x-app-layout>
