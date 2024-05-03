<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\employees\TaskMemberRequest;
use App\Models\Task;
use App\Models\TaskMember;
use App\Models\User;
use Illuminate\Http\Request;

class TaskMemberController extends Controller
{

    public function index()
    
        {
            $taskMembers = TaskMember::with('task', 'user')->get();
        
            $taskMemberData = $taskMembers->map(function ($taskMember) {
                return (object) [ 
                    'id' => $taskMember->id,
                    'task_title' =>  $taskMember->task->title ,
                    'user_name' => $taskMember->user->name ,
                ];
            });
        
            return view('employees.taskMember.index', compact('taskMemberData')); 
        }
     
    
    
    public function create()
    {
        
        $taskMember = new TaskMember();
        $users = User::get(['id', 'name']);
        $tasks= Task::get(['id', 'title']);
        
        return view('employees.taskMember.create', compact('users', 'taskMember', 'tasks'));
    }

   
    public function store(TaskMemberRequest $request)
    {
        $data = $request->validated();
      $taskMember=  TaskMember::create($data);
      if ($taskMember){
        return redirect()->route('taskMembers.index')->with('success', 'taskMember created successfully');}
        return back()->withErrors('taskMember not created');
    }

   

        

    
    public function destroy(TaskMember $taskMember)
    {
        $taskMember=$taskMember->delete();
        if($taskMember){
        return redirect()->route('taskMembers.index')->with('success', 'taskMembers deleted successfully');}
        return back()->withErrors('taskMembers not deleted');
    }
}
