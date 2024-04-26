@section('title', 'store project')

<x-app-layout>


    <div class="flex flex-col gap-4 px-4 py-3 mx-auto mt-10 card">
        <h2 class="w-full text-4xl text-center text-gray-900">Create Project</h2>

        <form action="{{ route('projects.store') }}"
            class="flex flex-row items-start justify-start gap-6 p-4 mt-4 bg-white form-control dark:bg-gray-900 rounded-2xl"
            method="POST">
            @csrf
            <div class="flex flex-col gap-3">
                <label class="w-full max-w-xs form-control">Name
                    <input type="text" placeholder="Type here"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                <label class="w-full max-w-xs form-control">Name
                    <input type="text" placeholder="Type here"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
                <label class="w-full max-w-xs form-control">Name
                    <input type="text" placeholder="Type here"
                        class="w-full max-w-xs mt-2 text-black bg-gray-200 dark:bg-gray-600 input input-bordered" />
                </label>
            </div>

            <div class="flex flex-col gap-3 flex-nowrap md:flex-row grow">
                <label class="w-full max-w-xs form-control ">Select <br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select ">
                        <option disabled class="" selected>Select language</option>
                        <option class="text-gray-500">English</option>
                        <option class="text-gray-500">Japanese</option>
                        <option class="text-gray-500">Italian</option>
                    </select> </label>
                <label class="w-full max-w-xs form-control ">Select <br />
                    <select class="w-full max-w-xs mt-3 bg-gray-200 dark:bg-gray-600 select ">
                        <option disabled class="" selected>Select language</option>
                        <option class="text-gray-500">English</option>
                        <option class="text-gray-500">Japanese</option>
                        <option class="text-gray-500">Italian</option>
                    </select> </label>
                    

               
            </div>

            <div
                class="flex flex-row flex-wrap items-center justify-center gap-4 my-auto md:flex-col md:flex-nowrap mx-autofloat-end">
                <button class="btn btn-accent md:btn-wide ">Create</button>
                <a href="projects" class="btn btn-info md:btn-wide ">Project List</a>
                <a href="customers/create" class="btn btn-warning md:btn-wide ">Add New Customer</a>
            </div>

        </form>
    </div>
</x-app-layout>
