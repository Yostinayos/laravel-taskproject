@section('title','update Customer')
       
<x-app-layout >
  

    <div class="container w-96 bg-slate-400 text-info-content dark:bg-slate-800 dark:text-white">
      
      <form action="{{ route('customers.store') }}" method="POST"> 
        @csrf
        
        <div class="card w-96 bg-neutral text-neutral-content">
          
           
{Customer name}
<input  type="text" placeholder="Type here" className="input input-bordered input-xs w-full max-w-xs" name="name" type="text" />
{Customer email}
<input type="text" placeholder="Type here" className="input input-bordered input-sm w-full max-w-xs"name="email" type="email" />
{Customer phone}
<input type="text" placeholder="Type here" className="input input-bordered input-md w-full max-w-xs" name="phone" type="text"/>
{another phone}
<input type="text" placeholder="Type here" className="input input-bordered input-lg w-full max-w-xs" name="phone2" type="text" />
<button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
</div>




</x-app-layout>