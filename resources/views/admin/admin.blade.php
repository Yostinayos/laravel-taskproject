@section('title','admin')

<x-app-layout>
    <div class="flex flex-wrap justify-center gap-5 p-5 mx-auto mt-5 bg-slate-100 dark:bg-inherit">
        <div class="card w-96 bg-slate-400 text-info-content dark:bg-slate-800 dark:text-white">
            <div class="items-center text-center card-body">
              <h2 class="card-title">Customers!</h2>
              <p>98</p>
              <div class="justify-end card-actions">
                <button class="btn btn-primary">List</button>
                                <button class="btn btn-primary">Create</button>

              </div>
            </div>
        </div>
        <div class="card w-96 bg-slate-400 text-info-content dark:bg-slate-800 dark:text-white">
            <div class="items-center text-center card-body">
              <h2 class="card-title">Projects!</h2>
              <p>98</p>
              <div class="justify-end card-actions">
                <button class="btn btn-primary">List</button>
                                <button class="btn btn-primary">Create</button>

              </div>
            </div>
        </div>
        <div class="card w-96 bg-slate-400 text-info-content dark:bg-slate-800 dark:text-white">
            <div class="items-center text-center card-body">
              <h2 class="card-title">Empolyee!</h2>
              <p>98</p>
              <div class="justify-end card-actions">
                <a href="customers">                
                <button class="btn btn-primary">List</button>
                </a>
                <button class="btn btn-primary">Create</button>

              </div>
            </div>
        </div>
        <div class="card w-96 bg-slate-400 text-info-content dark:bg-slate-800 dark:text-white">
            <div class="items-center text-center card-body">
              <h2 class="card-title">Tasks!</h2>
              <p>98</p>
              <div class="justify-end card-actions">
                <button class="btn btn-primary">List</button>
                                <button class="btn btn-outline">Create</button>

              </div>
            </div>
        </div>
    </div>
</x-app-layout>
