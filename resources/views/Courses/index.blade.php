@extends('layout')

@section('link')
    
<li>
	<a href="courses/create" accesskey="1" title="">Create a Course</a>
</li>

@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">

    	@forelse($courses as $course)

        <div id="content">
            {{-- <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p> --}}
            <div class="title">
                <h2>
                    {{$course->name}}</a>
                </h2>
            </div>
        </div>
        @empty
        <p>There is no courses available now.</p>

        @endforelse
    </div>
</div>

@endsection