<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\StoreProjectRequest;
use App\Http\Requests\Projects\UpdateProjectRequest;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects= Project::with('user','customer')->get();
        return view('projects.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get(['id', 'name']);
        $customers = Customer::get(['id', 'name']);
        $categories = Category::get(['id', 'category']);
        $project = new Project();
        $isUpdate=false;

        return view('projects.project.create', compact('isUpdate','users', 'customers', 'categories','project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
       $data= $request->validated();
       Project::create($data);
       return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {$project= Project::with('user','customer')->where('id',$project->id)->first();
        return view('projects.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project )
    {
        $isUpdate=true;
        $users = User::get(['id', 'name']);
        $customers = Customer::get(['id', 'name']);
        $categories = Category::get(['id', 'category']);
        return view('projects.project.create', compact('isUpdate','project','users', 'customers', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
       $data= $request->validated();
       $project->update($data);
       return redirect()->route('projects.index')->with('success','employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Task deleted successfully');
    }
}
