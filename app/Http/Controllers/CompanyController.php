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
        $collection = new CompanyCollection(Company::paginate(10)); // *PENDING* this needs to be same as API controller's index()

        $lastPage = 13; // *PENDING* this needs to be fetched from data.meta.last_page

        return Inertia::render('Companies/Index', [
            // 'results' => $collection,
            'lastPage' => $lastPage
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
