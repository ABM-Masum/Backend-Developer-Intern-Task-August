@extends('layout')

@section('link')
    
<li>
    <a href="/students/{{$student->id}}/edit" accesskey="1" title="">Update Student</a>
</li>

<li>
    <a href="/select" accesskey="1" title="">Select Cources</a>
</li>

@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>ID: {{$student->id}}</h2>
                <h2>NAME: {{$student->username}}</h2>
            </div>
            <p style="margin-top: 1em">
            	@foreach($student->courses as $course)
				    <li>
                        {{$course->name}}            
                    </li>
				@endforeach
            </p>
        </div>

        @endsection