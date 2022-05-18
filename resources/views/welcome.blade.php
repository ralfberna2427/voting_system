@extends('master')
@section('content')
    <div>
        <ul>
            <li><a href="/">Dashboard</a></li>
            <li><a href="/voter">Voters</a></li>
            <li><a href="/candidate">Candidates</a></li>
            <li><a href="/adduser">Add User</a></li>
            <li><a href="/result">results</a></li>
        </ul>
    </div>
    <!--sidebar end-->

    <div class="container">
        <div class="row gx-5">
            <div class="col-6 tp-10 text-center">
                <ul class="row gx-5 d-flex">
                    <li class="col bg-dark"><a href="/login">LOGIN</a></li>
                    <li class="col bg-light"><a href="/signup">REGISTER</a></li>
                </ul>
            </div>

            <div class="col-6 tp-10 text-center">col-4</div>
        </div>
    </div>
@endsection