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

    //edit

    //update


    //delete
    public function destroy($id)
    {
        
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully!');
    }
}
