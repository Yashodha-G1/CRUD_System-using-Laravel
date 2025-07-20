<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

 
    public function create()
    {
        return view('employees.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'FirstName'   => 'required|string|max:255',
            'LastName'    => 'required|string|max:255',
            'Email'       => [
                'required',
                'email',
                'unique:employees',
                'regex:/^[\w.+\-]+@[\w\-]+\.[a-z]{2,}$/i'
            ],
            'Phone'       => [
                'required',
                'regex:/^[0-9]{10}$/',
                'unique:employees'
            ],
            'Department'  => 'required|string|max:100',
            'DateJoined'  => 'required|date',
            'IsActive'    => 'required|boolean',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee created successfully.');
    }

   
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'FirstName'   => 'required|string|max:255',
            'LastName'    => 'required|string|max:255',
            'Email'       => [
                'required',
                'email',
                'unique:employees,Email,' . $id,
                'regex:/^[\w.+\-]+@[\w\-]+\.[a-z]{2,}$/i'
            ],
            'Phone'       => [
                'required',
                'regex:/^[0-9]{10}$/',
                'unique:employees,Phone,' . $id
            ],
            'Department'  => 'required|string|max:100',
            'DateJoined'  => 'required|date',
            'IsActive'    => 'required|boolean',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee updated successfully.');
    }

 
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Employee deleted successfully.');
    }
}
