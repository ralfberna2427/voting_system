@extends('master')
@section('content')
<div class="container p-5 my-5 border col-md-4">
	<form action="{{ route('createPosition') }}" method="POST" accept-charset="UTF-8">
		@csrf
		<h1 class="text-succes" style="text-align: center;">POSITION REGISTRATION</h1>
		<!--Name-->
		<h6>Position Information</h6>
		<label class="col-md-12 text-muted">Name</label>
		<input class="col-md-12 form-control" type="text" name="name">
	
		<label class="col-md-12 text-muted">Vote Needed</label>
		<input class="col-md-12 form-control" type="number" name="to_vote_needed">
		<!--End Name-->

		<div class="col-md-12" style="text-align: center; padding: 20px; padding-left: 0px; ">
			<button type="submit" style="height: 50px; width: 410px;" >ADD POSITION</button>
		</div>
	</form>
</div>
@endsection