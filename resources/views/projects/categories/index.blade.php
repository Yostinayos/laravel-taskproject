@section('title','Categories')
       
<x-app-layout>

@foreach($categories as $category)
category : {{ $category->category }}
<form action="{{ route('categories.destroy', $category->id) }}" method="post" class='btn btn-secondary'>
    @csrf
    @method('delete')
    <button><i class="fa fa-trash"></i></button>
</form>
    <br>
@endforeach
</x-app-layout>