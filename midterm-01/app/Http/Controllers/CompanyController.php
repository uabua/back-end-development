<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function viewAllCompanies()
    {
        $companies = Company::orderBy('created_at', 'DESC')->get();

        return view('all-companies')->with('companies', $companies);
    }

    public function createNewCompany()
    {
        return view('add-company');
    }

    public function addCompany(Request $request)
    {
        Company::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ]);

        return redirect()->route('companies.all');
    }

    public function deleteCompany(Request $request)
    {
        Company::where('id', $request->company_id)->delete();

        return redirect()->route('companies.all');
    }

    public function editCompany($id)
    {
        $company = Company::where('id', $id)->first();

        return view('edit-company')->with('company', $company);
    }

    public function updateCompany(Request $request, $id)
    {
        $company = Company::where('id', $id)->first();

        $company->name = $request->name;
        $company->code = $request->code;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->country = $request->country;

        $company->save();

        return redirect()->route('companies.all');
    }
}
