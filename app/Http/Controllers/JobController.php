<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JobController
{
    public function index(): View
    {
        $jobs = Job::query()->latest()->get();
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function show(Job $job): View
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(\Illuminate\Http\Request $request): RedirectResponse
    {
        //authorize
        //validate
        $request->validate([
            'name' => ['required', 'min:3'],
            'salary' => 'required'
        ]);

        //create and persist
        Job::query()->create(['name' => $request->post('name'), 'salary' => $request->post('salary')]);
        //redirect
        return redirect('/jobs');
    }

    public function edit(Job $job): View
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(): Redirect
    {
        //authorize
        //validate
        //edit and persist
        //redirect
    }

    public function destroy(): Redirect
    {
        //authorize
        //delete and persist
        //redirect
    }
}
