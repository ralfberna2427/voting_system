@extends('master')
@section('content')
<div class="container p-5 my-5 border col-md-3">
	<form action="{{ route('userAuth') }}" method="POST" accept-charset="UTF-8">
		@csrf
		<h1 class="text-succes" style="text-align: center;">LOGIN</h1>
		<div>
			<label class="col-md-12 text-muted" style="padding: 10px; padding-left: 0px;">Username</label>
			<input class="form-control" type="Username" name="txtUsername" required="">
			<label class="col-md-12 text-muted" style="padding: 10px; padding-left: 0px;">Password</label>
			<input class="form-control" type="Password" name="txtPassword" required="">
			<div class="col-md-12" style="text-align: center; width: 100%; padding: 10px;">
				<input class="btn btn-danger" type="submit" name="btnLogin" value="LOGIN">
				
			</div>
			<p class="text-center">No account yet? please <a href="/signup">Sign Up</a> here</p>
		</div>
		
	</form>
	
</div>

@endsection