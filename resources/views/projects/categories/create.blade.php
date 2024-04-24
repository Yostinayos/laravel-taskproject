@section('title','update category')
       
<x-app-layout >
  

    <div class="container w-96 bg-slate-400 text-info-content dark:bg-slate-800 dark:text-white">
      
      <form action="{{ route('categories.store') }}" method="POST"> 
        @csrf
        
        <div class="card w-96 bg-neutral text-neutral-content">
          
           
{category name}
<input  type="text" placeholder="Type here" className="input input-bordered input-xs w-full max-w-xs" name="category"  />

<button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
</div>




</x-app-layout>