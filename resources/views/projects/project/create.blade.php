@section('title','store project')
       
<x-app-layout >


<div class="container mt-3 py-3 px-4">
   <strong >create project</strong>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mt-3">{project name}git</div>
        <input class="form-control form-control-lg " name='name' placeholder="name" type="text">
        <br>
        {description}
        <input class="form-control mt-3" name='description' placeholder="description" type="text"><br>
        {starting_date}
        <input class="form-control mt-3" name='starting_date' placeholder="starting_date" type="date"><br>
        {ending_date}
        <input class="form-control mt-3" name='ending_date' placeholder="ending_date" type="date"><br>
{leader name}
        <select class="form-control mt-3" name="user_id">
            <option>Select a user</option>

            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select><br>
        {customer name}
        <select class="form-control mt-3" name="customer_id">
            <option>Select a customer</option>

            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach

        </select><br>
        {category }
        <select class="form-control mt-3" name="category_id">
            <option>Select a category</option>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach

        </select><br>

        <button class='btn btn-neutral'>Add</button>
    </form>
</div>
</x-app-layout >