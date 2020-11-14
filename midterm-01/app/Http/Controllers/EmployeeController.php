<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function viewAllEmployees()
    {
        $employees = Employee::orderBy('created_at', 'DESC')->get();

        return view('all-employees')->with('employees', $employees);
    }

    public function createNewEmployee()
    {
        return view('add-employee');
    }

    public function addEmployee(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('employees.all');
    }

    public function deleteEmployee(Request $request)
    {
        Employee::where('id', $request->employee_id)->delete();

        return redirect()->route('employees.all');
    }

    public function editEmployee($id)
    {
        $employee = Employee::where('id', $id)->first();

        return view('edit-employee')->with('employee', $employee);
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();

        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->birthdate = $request->birthdate;
        $employee->personal_id = $request->personal_id;
        $employee->salary = $request->salary;
        $employee->updated_at = now();

        $employee->save();

        return redirect()->route('employees.all');
    }
}
