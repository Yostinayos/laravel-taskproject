@extends('ourlayouts.main')
@section('main')
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
            <form action="{{ route('projects.delete', $project) }}" method="post">
                @csrf
                @method('delete')
                <button><i class="fa fa-trash text-red-500"></i></button>
            </form>
        
        @endforeach
    @endsection
