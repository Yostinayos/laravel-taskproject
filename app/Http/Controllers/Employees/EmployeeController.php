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
        $isUpdate = false;
        $employee = new Employee();
        $users = User::get(['id', 'name']);
        $isUpdate = false;
        return view('employees.employee.create', compact('users', 'isUpdate', 'employee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $formData = $request->validated();
        $user = User::findOrFail($formData['user_id']);
        if ($user) {
            $formData['name'] = $user->name;

            $employee = Employee::create($formData);
            if ($employee) {
                
                return redirect()->route('employees.index')->with('success', 'employee Created Successfully');
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
        $isUpdate = true;

        $users = User::get(['id', 'name']);
        return view('employees.employee.create', compact('employee', 'users', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $employee= $employee->update($data);
        if ($employee) {
        return redirect()->route('employees.index')->with('success','employee Created Successfully');}
        return back()->withErrors('employee Update Failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee = $employee->delete();

        if ($employee) {
            return redirect()->route('employees.index')->with('success', 'employee deleted Successfully');
        }



        return back()->withErrors('employee not deleted');
    }
}
