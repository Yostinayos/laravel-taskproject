<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\employees\StoreEmployeeRequest;
use App\Http\Requests\employees\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('user')->get();

        return view('employees.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get(['id', 'name']);
        return view('employees.employee.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $formData= $request->validated();
        $user = User::findOrFail($formData['user_id']);
        if($user){
            $formData['name'] = $user->name;
        
        $employee=Employee::create($formData);
        if ($employee){
            // return 'hi';
            return redirect()->route('employees.index')->with('success','employee Created Successfully');
        }
        return back()->withErrors(['y' => 'youstina']);
        }

    

        return back()->withErrors(['y' => 'youstina']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $employee = Employee::with('user')->where('id', $employee->id)->first();
        return view('employees.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $employee;
        $users = User::get(['id', 'name']);
        return view('employeess.employee.edit', compact('employee', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $employee->update($data);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee=$employee->delete();
        
        if ( $employee){
            return redirect()->route('employees.index')->with('success','employee Created Successfully');
        }

    

    return back()->withErrors('employee not deleted');
        
    }
}
