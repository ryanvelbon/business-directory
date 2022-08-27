<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Company;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyCollection;

class CompanyController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | API Layer
    |--------------------------------------------------------------------------
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('name', 'asc')->paginate(10);

        return new CompanyCollection($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CompanyResource(Company::findOrFail($id));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*
    |--------------------------------------------------------------------------
    | Web Layer
    |--------------------------------------------------------------------------
    */

    /**
     * Render the index page
     * 
     * @return \Inertia\Response
     */
    public function indexPage()
    {
        $companies = Company::all();

        return Inertia::render('Companies/Index', [
            'companies' => $companies,
        ]);
    }

    /**
     * Render the show page
     * 
     * @return \Inertia\Response
     */
    public function showPage($id)
    {
        $company = Company::findOrFail($id);

        return Inertia::render('Companies/Show', [
            'company' => $company
        ]);
    }

    /**
     * Render the create page
     * 
     * @return \Inertia\Response
     */
    public function createPage()
    {
        //
    }

    /**
     * Render the edit page
     * 
     * @return \Inertia\Response
     */
    public function editPage()
    {
        //
    }
}
