@extends('layout')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

@endsection

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<h1 class="heading has-text-weight-bold is-size-4">New Student</h1>
		<form method="POST" action="/students">

			@csrf

			<div class="field">
				<label class="label" for="username">Name</label>
				<div class="control">
					<input 
						class="input @error('username') is-danger @enderror" 
						type="text" 
						name="username" 
						id="username"
						value="{{ old('username') }}"
						required 
					>

					@error('username')
						<p class="help is-danger">{{ $errors->first('username') }}</p>
					@enderror
				</div>
			</div>

			<div class="field">
				<label class="label" for="email">Email</label>
				<div class="control">
					<input 
						class="input @error('email') is-danger @enderror" 
						type="email" 
						name="email" 
						id="email"
						value="{{ old('email') }}"
						required 
					>

					@error('email')
						<p class="help is-danger">{{ $errors->first('email') }}</p>
					@enderror
				</div>
			</div>

			<div class="field">
	        <label class="label"
	               for="password"
	        >
	            Password
	        </label>

	        <input class="control"
	               type="password"
	               name="password"
	               id="password"
	        >

	        @error('password')
	            <p class="help is-danger">{{ $message }}</p>
	        @enderror
	    </div>

	    <div class="field">
	        <label class="label"
	               for="password_confirmation"
	        >
	            Password Confirmation
	        </label>

	        <input class="control"
	               type="password"
	               name="password_confirmation"
	               id="password_confirmation"
	        >

	        @error('password_confirmation')
	            <p class="help is-danger">{{ $message }}</p>
	        @enderror
	    </div>

			{{-- <div class="field">
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
			</div> --}}

			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection