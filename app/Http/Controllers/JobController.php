<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

    public function store(Request $request): RedirectResponse
    {
        //authorize
        $employer_id = 1;
        //validate
        $request->validate([
            'name' => ['required', 'min:3'],
            'salary' => 'required'
        ]);

        //create and persist
        Job::query()->create(['name' => $request->post('name'), 'salary' => $request->post('salary'), 'employer_id' => $employer_id]);
        //redirect
        return redirect('/jobs');
    }

    public function edit(Job $job): View
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Request $request, Job $job): RedirectResponse
    {
        //authorize
        $employer_id = 1;
        //validate
        $request->validate([
            'name' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        //edit and persist
        $job->update(['name' => $request->post('name'), 'salary' => $request->post('salary'), 'employer_id' => $employer_id]);
        //redirect
        return redirect("/jobs");
    }

    public function destroy(Job $job): RedirectResponse
    {
        //authorize
        //delete and persist
        $job->delete();
        //redirect
        return redirect("/jobs");
    }
}
