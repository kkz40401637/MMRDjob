<?php

namespace App\Http\Controllers;
use App\jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = jobs::all()->take(5);
        return view('welcome',compact('jobs'));
    }

    public function show($id,jobs $job){
       //dd($job->id);
        return view('jobs.show', compact('job'));
    }
    
}
