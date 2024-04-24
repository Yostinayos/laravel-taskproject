@section('title',' project')
<x-app-layout >
    <div class="container mt-3 py-3 px-4">
        <div className="card w-96 bg-base-100 shadow-xl">
            <div className="card-body">
               
               
              <b className="card-title "> project name :   {{ $project->name }}</b>
              <p>  project description:  {{ $project->description }}</p>
              <h2 className="card-body"> project leader:  {{ $project->user->name }}</h2>
              <h2 className="card-body">  customer:   {{ $project->customer->name }}</h2>
              <h2 className="card-body"> customer email:{{ $project->customer->email }}</h2>
              <h2 className="card-body"> starting_date:  {{ $project->starting_date }}</h2>
              <h2 className="card-body">  ending_date:{{ $project->ending_date }}</h2>
              <div className="card-actions justify-end ">
                <div class="col-span-2 mr-2 mt-3 mb-4">
                            
                    <a href='{{route("projects.edit", $project->id)}}' class='btn btn-neutral'>
                        <i class="fa fa-pencil"></i>
                    </a>

                    
                
            </div>
            <form action="{{ route('projects.destroy', $project) }}" method="post">
                @csrf
                @method('delete')
                <button class='btn btn-socandary'><i class="fa fa-trash text-red-500"></i></button>
            </form>
            </div>
            </div>
            </div>
            </div>

   
</x-app-layout >