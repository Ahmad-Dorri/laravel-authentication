<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
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
        //validate
        $request->validate([
            'name' => ['required', 'min:3'],
            'salary' => 'required'
        ]);

        //create and persist
        $employer_id = DB::table('employers')->where('user_id', Auth::user()->id)->first()->id;
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
        Gate::authorize('edit-job', $job);
        //validate
        $request->validate([
            'name' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        //edit and persist
        $job->update(['name' => $request->post('name'), 'salary' => $request->post('salary')]);
        //redirect
        return redirect("/jobs");
    }

    public function destroy(Job $job): RedirectResponse
    {
        //authorize
        Gate::authorize('edit-job', $job);
        //delete and persist
        $job->delete();
        //redirect
        return redirect("/jobs");
    }
}
