<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employees\RoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles= Role::get();
        return view("employees.role.index" ,compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUpdate = false;
        return view("employees.role.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $data = $request->validated();
       $role= Role::create($data);
       if($role ){
        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }
    return back()->withErrors('role doesnot created');
}
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role=$role->delete();
        if($role){
         return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
        }
        
    return back()->withErrors('role doesnot created');
    }
}
