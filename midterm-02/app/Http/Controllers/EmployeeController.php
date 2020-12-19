<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        $employees = $company->employees()->get();

        return view('employees/index', compact('company', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        return view('employees/create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        $employee = new Employee();

        $employee->company_id = $company->id;
        $employee->first_name = $request->input('first-name');
        $employee->last_name = $request->input('last-name');
        $employee->job_title = $request->input('job-title');
        $employee->phone_number = $request->input('phone-number');
        $employee->is_hired = true;

        $employee->save();

        return redirect()->route('companies.employees.create', [$company]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, Employee $employee)
    {
        return view('employees/edit', compact('company', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();


        $employee->update([
            'first_name'     => $request->input('first-name'),
            'last_name'     => $request->input('last-name'),
            'job_title'     => $request->input('job-title'),
            'phone_number'     => $request->input('phone-number'),
        ]);

        return redirect()->route('companies.employees.index', [$employee->company]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, Employee $employee): Response
    {
        $employee->delete();

        return response("OK");
    }
}
