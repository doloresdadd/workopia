<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    // @desc Show all jobs
    // @route GET /jobs
    public function index(): View
    {
        $title = 'Available Jobs';
        $jobs = [
            'Backend Developer',
            'Frontend Developer',
            'UI/UX Designer',
            'Product Manager',
            'Project Manager',
            'DevOps Engineer',
            'Data Scientist',
            'Machine Learning Engineer',
            'QA Engineer',
            'Technical Writer',
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

   // @desc Show the form for creating a new job
   // @route GET /jobs/create
    public function create(): View
    {
        return view('jobs.create');
    }

    // @desc Store a newly created job in storage
    // @route POST /jobs
    public function store(Request $request): string
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Job title: $title, Job description: $description";
    }

    // @desc Display the specified job
    // @route GET /jobs/{id}
    public function show(string $id): string
    {
        return "Showing job $id";
    }

    // @desc Show the form for editing the specified job
    // @route GET /jobs/{id}/edit
    public function edit(string $id): string
    {
        return "Editing job $id";
    }

    // @desc Update the specified job in storage
    // @route PUT /jobs/{id}
    public function update(Request $request, string $id): string
    {
        return "Updating job $id";
    }

    // @desc Remove the specified job from storage
    // @route DELETE /jobs/{id}
    public function destroy(string $id): string
    {
        return "Deleting job $id";
    }

    // @desc Save job to favorites
    // @route POST /jobs/{id}/save
    public function save(Job $job): string
    {
        return "Saving job to favorites";
    }
}
