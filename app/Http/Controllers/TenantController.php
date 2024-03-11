<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\View\View;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tables(): View
    {
        $tenants = Tenant::all();
        return view('tenants.tables')->with('tenants', $tenants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tenants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Tenant::create($input);
        return redirect('tenants')->with('flash_message', 'Tenant Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $tenants = Tenant::find($id);
        return view('tenants.show')->with('tenants', $tenants);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $tenants = Tenant::find($id);
        return view('tenants.edit')->with('tenants', $tenants);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $tenants = Tenant::find($id);
        $input = $request->all();
        $tenants->update($input);
        return redirect('tenants')->with('flash_message', 'Tenant Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Tenant::destroy($id);
        return redirect('tenants')->with('flash_message', 'Tenant deleted!');
    }
}
