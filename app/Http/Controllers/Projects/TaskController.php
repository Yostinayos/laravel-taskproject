<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\StoreTaskRequest;
use App\Http\Requests\Projects\UpdateTaskRequest;
use App\Models\Category;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ts = Auth::user()->name;

        $tasks = Task::with('project', 'category')->get();
        $data = [];
        foreach($tasks as $task){
            $data[] =(object)[
                "id" => $task->id,
                "title" => $task->title,
                "description" => $task->description,
                "starting_date" => $task->starting_date,
                "ending_date" => $task->ending_date,
                "category" => $task->category->category,
                "project" => $task->project->name
            ];
        }
        // return $ts;
        return view('projects.task.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $projects =Project::get(['id', 'name']);
        $categories = Category::get(['id', 'category']);
        $task = new Task();
        $isUpdate = false;

        return view('projects.task.create', compact('isUpdate',  'projects', 'categories', 'task'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $data = $request->validated();
        $task = Task::create($data);
        if ($task) {
            return redirect()->route('tasks.index')->with('success', 'Task created successfully');
        }
        return back()->withErrors('task created failed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $task = Task::with('project', 'category')->where('id', $task->id)->first();
        return view('projects.task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

        $projects =    Project::get(['id', 'name']);
        $categories = Category::get(['id', 'category']);

        $isUpdate = true;

        return view('projects.task.create', compact('isUpdate',  'task','projects', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $data = $request->validated();
        $task = $task->update($data);
        if ($task) {
            return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
        }
        return back()->withErrors('Task not updated')->with(['fail' => 'Task not updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task =  $task->delete();
        if ($task) {
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
        }
        return back()->withErrors('task not deleted');
    }
}
