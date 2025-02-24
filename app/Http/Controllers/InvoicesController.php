<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use App\Models\sections;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoices.invoices');

    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

            $sections = sections::all();
            return view('invoices.add_invoice', compact('sections'));
        
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(invoices $invoices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(invoices $invoices)
    {
        //
    }
}
