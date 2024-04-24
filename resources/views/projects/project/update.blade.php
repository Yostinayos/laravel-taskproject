@section('title',' update project')

<x-app-layout >




<div class="container mt-3">
    <h2>edit project</h2>

    <form action="{{ route('projects.update',$project) }}" method="POST">
        @csrf
        @method('PUT')
        <input class="form-control form-control-lg" name='name' placeholder="name" type="text">
        <br>
        <input class="form-control mt-3" name='description' placeholder="description" type="text"><br>
        <input class="form-control mt-3" name='starting_date' placeholder="starting_date" type="date"><br>
        <input class="form-control mt-3" name='ending_date' placeholder="ending_date" type="date"><br>

        <select class="form-control mt-3" name="user_id">
            <option>Select a user</option>

            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select><br>
        <select class="form-control mt-3" name="customer_id">
            <option>Select a customer</option>

            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach

        </select><br>
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