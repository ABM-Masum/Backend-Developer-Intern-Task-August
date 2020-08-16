<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
    	return view('courses.index', [
    		'courses' => Course::paginate(50)
    	]);
    }

    public function create()
    {
    	return view('Courses.create');
    }

    public function store()
    {
    	Course::create(request()->validate([
    		'name' => 'required'
    	]));

    	return redirect('/courses');
    }
}
