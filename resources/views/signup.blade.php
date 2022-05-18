@extends('master')
@section('content')
<div class="container p-5 my-5 border col-md-4">
	<form action="{{ route('saveRegistration') }}" method="POST" accept-charset="UTF-8">
		@csrf
		<h1 class="text-succes" style="text-align: center;">USER REGISTRATION</h1>
		<!--Name-->
		<h6>Name</h6>
		<label class="col-md-12 text-muted">First name</label>
		<input class="col-md-12 form-control" type="text" name="first_name">
		<label class="col-md-12 text-muted">Middle name</label>
		<input class="col-md-12 form-control" type="text" name="middle_name">
		<label class="col-md-12 text-muted">Last name</label>
		<input class="col-md-12 form-control" type="text" name="last_name">
		<!--End Name-->

		<!-- User, Password-->
		<h6>Login Information</h6>
		<label class="col-md-12 text-muted">Username</label>
		<input class="col-md-12 form-control" type="text" name="student_id">
		<label class="col-md-12 text-muted">Password</label>
		<input class="col-md-12 form-control" type="password" name="password">
		<!-- End User, Password-->

		<!-- <h6>Birthdate</h6> -->
		<!--Birth date, gender, course-->
		<!-- <label class="col-md-12 text-muted">Date of Birth</label>
		<input class="col-md-12 form-control" type="text" name="txtDate_of_birth">
		<label class="col-md-12 text-muted">Gender</label>
		<input class="col-md-12 form-control" type="text" name="txtGender">
		<label class="col-md-12 text-muted">Course and Section</label>
		<input class="col-md-12 form-control" type="text" name="txtCourse"> -->
		<!--End Birthdate, gender, course-->


		<!--Email, Mobile Number-->
		<!-- <h6>Contacts</h6>
		<label class="col-md-12 text-muted">Email</label>
		<input class="col-md-12 form-control" type="text" name="txtEmail">
		<label class="col-md-12 text-muted">Mobile Number</label>
		<input class="col-md-12 form-control" type="text" name="txtMnumber"> -->
		<!--End Email, Mobile Number-->

		<!-- Address, Barangay City Province -->
		<!-- <h6>Address</h6>
		<label class="col-md-12 text-muted">Barangay</label>
		<input class="col-md-12 form-control" type="text" name="txtBarangay">
		<label class="col-md-12 text-muted">City</label>
		<input class="col-md-12 form-control" type="text" name="txtCity">
		<label class="col-md-12 text-muted">Province</label>
		<input class="col-md-12 form-control" type="text" name="txtProvince"> -->
		<!-- End Address, Barangay City Province -->


		<div class="col-md-12" style="text-align: center; padding: 20px; padding-left: 0px; ">
			<button type="submit" style="height: 50px; width: 410px;" >SIGN UP</button>
		</div>
		<p class="text-center">Already have an account please <a href="/login">Login</a> here</p>
		

	</form>
</div>
@endsection
