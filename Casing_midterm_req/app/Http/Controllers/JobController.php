<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $companies = Company::all();
       return view('jobs.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'company_id' => 'required|exists:companies,id',
        'salary' => 'required|numeric',
    ]);

    Job::create([
        'title' => $request->title,
        'description' => $request->description,
        'company_id' => $request->company_id,
        'salary' => $request->salary,
    ]);

    return redirect()->route('jobs.index')->with('success', 'Job added successfully!');
}

    

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $companies = Company::all(); // Fetch all companies
        return view('jobs.edit', compact('job', 'companies'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'company_id' => 'required|exists:companies,id',
        'salary' => 'required|numeric',
    ]);

    $job->update([
        'title' => $request->title,
        'description' => $request->description,
        'company_id' => $request->company_id,
        'salary' => $request->salary,
    ]);

    return redirect()->route('jobs.index')->with('success', 'Job updated successfully!');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
    }
}
