@extends('layout')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

@endsection

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<h1 class="heading has-text-weight-bold is-size-4">Select Cources</h1>
		<form method="POST" action="/select">

			@csrf

			<div class="field">
				<label class="label" for="courses">Courses</label>
				<div class="select is-multiple control">
					<select 
						name="courses[]"
						multiple 
					>
						@foreach($courses as $course)
							<option value="{{$course->id}}">{{$course->name}}</option>
						@endforeach
					</select>

					@error('courses')
						<p class="help is-danger">{{ $message }}</p>
					@enderror
				</div>
			</div>

			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection