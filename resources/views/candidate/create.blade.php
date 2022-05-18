@extends('master')
@section('content')
<div class="container p-5 my-5 border col-md-4">
	<form action="{{ route('createCandidate') }}" method="POST" accept-charset="UTF-8">
		@csrf
		<h1 class="text-succes" style="text-align: center;">CANDIDATE REGISTRATION</h1>
		<!--Name-->
		<h6>Candidate Information</h6>
		<label class="col-md-12 text-muted">First name</label>
		<input class="col-md-12 form-control" type="text" name="first_name">
		<label class="col-md-12 text-muted">Middle name</label>
		<input class="col-md-12 form-control" type="text" name="middle_name">
		<label class="col-md-12 text-muted">Last name</label>
		<input class="col-md-12 form-control" type="text" name="last_name">
		<label class="col-md-12 text-muted">Address</label>
		<input class="col-md-12 form-control" type="text" name="address">

		<h6 class="mt-2">Position</h6>
		<label class="col-md-12 text-muted">Position</label>
		<select  class="col-md-12 form-control" name="position_id" id="cars"> <!-- naman cars adi?-->
		@foreach($positions as $position)
			<option value="{{ $position->id }}">{{ $position->name }}</option>
		@endforeach
		</select>
		<!--End Name-->

		<div class="col-md-12" style="text-align: center; padding: 20px; padding-left: 0px; ">
			<button type="submit" style="height: 50px; width: 410px;" >REGISTER</button>
		</div>
	</form>
</div>
@endsection