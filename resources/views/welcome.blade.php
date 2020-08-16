@extends('layout')

@section('link')
	
<li>
	<a href="{{ route('students.index') }}" accesskey="1" title="">All Students</a>
</li>

<li>
	<a href="{{ route('courses.index') }}" accesskey="2" title="">All Courses</a>
</li>

@endsection

@section('header')

<div id="header-featured">
    <div id="banner-wrapper">
        <div id="banner" class="container">
            <h2>Registration</h2>
            <p><strong>Course Registration Panel</strong>, Select courses according to your prerequisites for fall-2019-2020</p> 
        </div>
    </div>
</div>

@endsection
