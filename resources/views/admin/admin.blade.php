@section('title', 'admin')

<x-app-layout>
    <div class="flex flex-col justify-center gap-5 p-5 mx-auto mt-5 bg-slate-100 dark:bg-inherit">
        <div class="text-gray-400 bg-white card w-96 dark:bg-gray-900 dark:text-white">
            <div class="items-center text-center card-body">
                <h2 class="card-title">Projects!</h2>
                <p class="text-gray-950 dark:text-white">98</p>
                <div class="justify-end card-actions">
                  <a href="/projects">
                    <button class="text-white border-none btn blue">List</button>
                  </a>
                  <a href="projects/create">
                    <button class="text-white border-none btn green dark:text-white">Create</button>
                  </a>           
                  </div>
            </div>
        </div>
       
      <div class="text-gray-400 bg-white card w-96 dark:bg-gray-900 dark:text-white">
        <div class="items-center text-center card-body">
            <h2 class="card-title">Customers!</h2>
            <p class="text-gray-950 dark:text-white">100</p>
            <div class="justify-end card-actions">
              <a href="customers">
                <button class="text-white border-none btn blue">List</button>
              </a>
              <a href="customers/create">
                <button class="text-white border-none btn green ">Create</button>
              </a>              
              </div>
        </div>
    </div>
    <div class="text-gray-400 bg-white card w-96 dark:bg-gray-900 dark:text-white">
      <div class="items-center text-center card-body">
          <h2 class="card-title">Employees!</h2>
          <p class="text-gray-950 dark:text-white">98</p>
          <div class="justify-end card-actions">
            <a href="employees">
              <button class="text-white border-none btn blue">List</button>
            </a>
            <a href="employees/create">
              <button class="text-white border-none btn green dark:text-white">Create</button>
            </a>              
            </div>
      </div>
  </div>
    </div>
</x-app-layout>
