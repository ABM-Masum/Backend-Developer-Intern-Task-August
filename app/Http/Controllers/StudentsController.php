<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function show(User $student)
    {
    	return view('students.show', ['student' => $student]);
    }

    public function index()
    {
        if(request('course'))
        {
            $students = Course::where('name', request('course'))->firstOrFail()->users;
        }else{
            $students = User::latest()->get();
        }

    	return view('students.index', ['students' => $students]);
    }

    public function create() 
    {
        return view('students.create', [
            'courses' => Course::all()
        ]);
    }

    public function store()
    {
        $this->validateStudent();

        $student = new User(request(['username', 'email', 'password']));

        $student->save();

        // $studnet->courses()->attach(request('courses'));

        return redirect(route('students.index'));
    }

    public function edit(User $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(User $student)
    {
        $student->update($this->validateStudent());

        return redirect('/students/'. $student->id);
    }

    protected function validateStudent()
    {
        return Request()->validate([
            'username' => ['string', 'required', 'max:255'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255'
            ],
            'password' => [
                'string',
                'min:8',
                'max:255',
                'confirmed'
            ]
            // 'courses' => 'exists:courses,id'
        ]);
    }
}