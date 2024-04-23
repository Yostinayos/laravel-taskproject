@section('title','Customer')
       
<x-app-layout>
   <div className="container"></div>
<div className="bg-gray-200 p-4 rounded-md shadow-lg">
     

    <div className="card w-96 bg-neutral text-neutral-content">
        <div className="card-body items-center text-center">
          <h2 className="card-title">Customer name:{{ $customer->name }}</h2>
          <h2 >Customer email:{{ $customer->email }}</h2>

          @foreach ($customer->projects as $project)
          <h2 >project:{{ $project->name }}</h2>
            
            <br />
          <p>  {{ $project->description }}</p>
            <br />
           <h2>starting_date:{{ $project->starting_date }}</h2> 
            <br />
           <h2>ending_date:{{ $project->ending_date }}</h2> 
            <br />
           <h2>leader: {{ $project->user->name }}</h2>
        <br />
            
        @endforeach
          
          <div className="card-actions justify-end">

            <a href='{{route("customers.edit", $customer->id)}}' class='btn btn-primary'>
                <i class="fa fa-pencil"></i>
            </a>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="post" class='btn btn-secondary'>
                @csrf
                @method('delete')
                <button><i class="fa fa-trash"></i></button>
            </form>
           
            
          </div>
        </div>
      </div>
    </div>
   
    
</x-app-layout>