<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\employees\MemberRequest;
use App\Models\Member;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index()
    
        {
            $members = Member::with('project', 'user')->get();
        
            $memberData = $members->map(function ($member) {
                return (object) [ 
                    'id' => $member->id,
                    'project_title' =>  $member->project->name ,
                    'user_name' => $member->user->name ,
                ];
            });
        
            return view('employees.member.index', compact('memberData')); // Pass transformed data to the view
        }
     
    
    
    public function create()
    {
        
        $member = new Member();
        $users = User::get(['id', 'name']);
        $projects= Project::get(['id', 'name']);
        
        return view('employees.member.create', compact('users', 'member', 'projects'));
    }

   
    public function store(MemberRequest $request)
    {
        $data = $request->validated();
      $member=  Member::create($data);
      if ($member){
        return redirect()->route('members.index')->with('success', 'Member created successfully');}
        return back()->withErrors('Member not created');
    }

   

        

    
    public function destroy(Member $member)
    {
        $member=$member->delete();
        if($member){
        return redirect()->route('members.index')->with('success', 'Member deleted successfully');}
        return back()->withErrors('Member not deleted');
    }
}
