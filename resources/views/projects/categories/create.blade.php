@section('title', 'store category')

<x-app-layout>


    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">Create category</h2>

        <form action="{{ route('categories.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            <div class="flex flex-col gap-3">
                <label class="w-full max-w-xs form-control">Category
                    <input type="text" name='category' placeholder="category" value="{{ @old('category') }}"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </label>
           
              </div>

              <div
                  class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                  <button class="btn btn-accent md:btn-wide  mt-7">Create</button>
                  
                  
              </div>
  
          </form>
</form> 
</div>





</x-app-layout>