<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Company;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\CompanyCollection;

class CompanyController extends Controller
{
    /**
     * Render the index page
     * 
     * @return \Inertia\Response
     */
    public function index()
    {
        $collection = new CompanyCollection(Company::paginate(10));

        return Inertia::render('Companies/Index', [
            'results' => $collection
        ]);
    }

    /**
     * Render the show page
     * 
     * @return \Inertia\Response
     */
    public function show($id)
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
    public function create()
    {
        //
    }

    /**
     * Render the edit page
     * 
     * @return \Inertia\Response
     */
    public function edit()
    {
        //
    }
}
