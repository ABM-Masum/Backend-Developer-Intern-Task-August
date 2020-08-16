<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesSelectController extends Controller
{
    public function create()
    {
    	return view('SelectCources.create',[
    		'courses' => Course::all()
    	]);
    }

    public function store()
    {
    	dd(request()->all());
    }
}
