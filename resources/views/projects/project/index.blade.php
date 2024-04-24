@section('title','projects')
       
<x-app-layout >
<h2 class='mt-3 py-3 px-4'>All Projects</h2>

<div class="container mt-3 py-3 px-4">
<div className="card w-96 bg-base-100 shadow-xl">
    <div className="card-body">
        @foreach ($projects as $project)
       
      <b className="card-title "> project name :   {{ $project->name }}</b>
      <p>  project description:  {{ $project->description }}</p>
      <h2 className="card-body"> project leader:  {{ $project->user->name }}</h2>
      <h2 className="card-body">  customer:   {{ $project->customer->name }}</h2>
      <h2 className="card-body"> customer email:{{ $project->customer->email }}</h2>
      <h2 className="card-body"> starting_date:  {{ $project->starting_date }}</h2>
      <h2 className="card-body">  ending_date:{{ $project->ending_date }}</h2>
      
      <div className="card-actions justify-end ">
        <div class="col-span-2 mr-2 mt-3 mb-4">
                    
            <a href='{{route("projects.show", $project->id)}}' class='btn btn-neutral'>
                <i class="fa fa-eye"></i>
            </a>
            
        
    </div>
    </div>
    @endforeach
       
      </div>
    </div>
    </div>
</x-app-layout >
  