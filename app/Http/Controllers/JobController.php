<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $jobs = [
            'Job 1',
            'Job 2',
            'Job 3',
            'Job 4',
            'Job 5',
        ]; 
        return view('jobs/index', compact('title', 'jobs'));
    }
   
    //Show the form to create a new job
    public function create()
    {
        return view('jobs.create');
    }

    //Store a new job
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        return "Title: $title, Description: $description";
    }

    //Show a single job
    public function show($id)
    {
        return "Showing job $id";
    }}
