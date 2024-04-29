
@section('title', 'update Customer')

<x-app-layout>
  @if(session('fail'))
  
@endif
    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">{{$isUpdate? 'Update Project':'Create Project' }}</h2>

        <form action="{{ $isUpdate ?  route('customers.update',$customer) : route('customers.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            @if($isUpdate)
            @method('PUT')
        @endif
            <div class="flex flex-col gap-3">
                <label class="w-full max-w-xs form-control">Name
                    <input type="text" name='name' placeholder="name" value="{{   @old('name')??$customer->name  }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </label>
                <label class="w-full max-w-xs form-control">Email
                    <input type="email" name='email' placeholder="email" value="{{ @old('email')??$customer->email }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </label>
                <label class="w-full max-w-xs form-control">Phone  
                    <input type="text" name='phone' placeholder="phone" value="{{ @old('phone')??$customer->phone }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                      </label>
                <label class="w-full max-w-xs form-control">Phone2 
                    <input type="text" name='phone2' placeholder="phone" value="{{ @old('phone2')??$customer->phone2 }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('phone2')" class="mt-2" />
                      </label>
            </div>

            <div class="flex flex-col flex-wrap gap-3 md:flex-row grow">
               
               
                    </div>

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">{{$isUpdate ? 'Update':'Create'}}</button>
                <a href={{ route("projects.index")}} class="btn btn-info md:btn-wide ">Project List</a>
                <a href={{ route("projects.create")}}  class="btn btn-warning md:btn-wide ">Add New Project</a>
            </div>

        </form>
    </div>
</x-app-layout>
