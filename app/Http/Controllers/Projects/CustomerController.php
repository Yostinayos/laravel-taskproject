<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\StoreCustomerRequest;
use App\Http\Requests\Projects\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('projects')->get();

        return view('projects.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUpdate = false;
        $customer = new Customer();
        return view('projects.customer.create', compact('isUpdate', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $data = $request->validated();
        $customer = Customer::create($data);
        if ($customer) {
            return redirect()->route('customers.index')->with('success', 'Customer created successfully');
        } 
            return back()->withErrors('Customer not created')->with('fail', 'Customer not created');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer = Customer::with('projects')->where('id', $customer->id)->first();
        return view('projects.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $isUpdate = true;

        return view('projects.customer.create', compact('customer', 'isUpdate', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $data = $request->validated();
       $customer= $customer->update($data);
       if($customer){
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');}
        return back()->withErrors('Customer not updated')->with(['fail'=>'Customer not updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
       $customer= $customer->delete();
       if($customer){
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully');
       }
       return back()->withErrors('customer not deleted');
    }
}
