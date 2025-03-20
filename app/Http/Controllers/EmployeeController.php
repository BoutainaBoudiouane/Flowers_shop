<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();

        return view('dashboard.EmployeePage.employee', compact('employees'));
    }
    //add
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cin' => 'required|string|unique:employees,cin|max:255',
            'gender' => 'required|in:male,female',
            'adresse' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date',
            'post' => 'required|string|max:255',
        ]);
        Employee::create($request->all());

        return redirect()->back()->with('success', 'Employee added successfully!');
    }

    //update
    public function update(Request $request, Employee $employee)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'cin' => 'required|string|max:255|unique:employees,cin,' . $employee->id,
            'gender' => 'required|in:male,female',
            'adresse' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date',
            'post' => 'required|string|max:255',
        ]);
    
        // Update the employee record
        $employee->update($request->all());
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Employee updated successfully!');
    }

    //delete
    public function destroy($id)
    {
        
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully!');
    }

}
