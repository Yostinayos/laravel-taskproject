@section('title','update Customer')
       
<x-app-layout>
    <div class="container">
      <form action="{{ route('customers.update',$customer->id) }}" method="POST"> 
        @csrf
        @method('PUT')
{Customer name}
<input type="text" placeholder="Type here" className="input input-bordered input-xs w-full max-w-xs" name="name" type="text" />
{Customer email}
<input type="text" placeholder="Type here" className="input input-bordered input-sm w-full max-w-xs"name="email" type="email" />
{Customer phone}
<input type="text" placeholder="Type here" className="input input-bordered input-md w-full max-w-xs" name="phone" type="text"/>
{another phone}
<input type="text" placeholder="Type here" className="input input-bordered input-lg w-full max-w-xs" name="phone2" type="text" />
<button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>


</x-app-layout>