@extends('layout')

@section('link')
    
<li>
    <a href="students/create" accesskey="1" title="">Create a Student</a>
</li>

@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">

    	@forelse($students as $student)

        <div id="content">
            {{-- <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p> --}}
            <div class="title">
                <h2>
                    <a href="/students/{{$student->id}}">{{$student->username}}</a>
                </h2>
            </div>
        </div>
        @empty
        <p>There is no students.</p>

        @endforelse
    </div>
</div>

@endsection
