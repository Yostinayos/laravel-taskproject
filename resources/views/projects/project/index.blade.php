@section('title','projects')
       
<x-app-layout >

    @foreach ($projects as $project)
        {{ $project->name }}
        <br>
        {{ $project->description }}
        <br>
        {{ $project->user->name }}
        <br>
        {{ $project->customer->name }}
       
        <br />
        {{ $project->customer->email }}
       
        <br />
            {{ $project->starting_date }}
            <br />
            {{ $project->ending_date }}
            <br />
            <div class="col-span-2 mr-2">
                    
                <a href='{{route("projects.show", $project->id)}}' class='btn btn-neutral'>
                    <i class="fa fa-eye"></i>
                </a>
                
            
        </div>
           
        
        @endforeach
        </x-app-layout >
