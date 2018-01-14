<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index()
    {

        $company = Company::all();
        return view('company.index')
            ->with('company', $company);
    }
    public function create()
    {
        return view('company.create');
    }
    public function postCreate(Request $request)
    {
        $name = $request->get('employee');
        $branchNew = new Company();
        $branchNew->fill($name);
        $branchNew->save();
        return redirect('/admin/company');
    }

    public function edit(Request $request, $id)
    {

        $branch = Company::where('id', $id)->first();

        return view('company.edit')
            ->with('branch', $branch);
    }


    public function postEdit(Request $request, $id)
    {

        $form = $request->get('employee');
        $branchEdit = Company::where('id', $id)->first();
        $branchEdit->fill($form);
        $branchEdit->save();

        return redirect('/admin/company');
    }


    public function postDelete(Request $request, $id)
    {
        $branchDelete = Company::where('id', $id)->first();
        $branchDelete->delete();
        return redirect('/admin/company');
    }

}
