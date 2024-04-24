@section('title',' project')
<x-app-layout >

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
    <div className=" justify-end">

        <a href='{{route("projects.edit", $project->id)}}' class='btn btn-primary'>
            <i class="fa fa-pencil"></i>
        </a>
    <form action="{{ route('projects.destroy', $project) }}" method="post">
        @csrf
        @method('delete')
        <button class='btn btn-socandary'><i class="fa fa-trash text-red-500"></i></button>
    </form>
    </div>
</x-app-layout >