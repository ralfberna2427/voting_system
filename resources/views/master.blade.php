<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>CCIS Voting Sytem</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="\images\navLogo.png" alt="Logo" style="width:40px;" class="rounded-pill">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link"href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link"href="/contactus">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link"href="/aboutus">About Us</a></li>
                <li class="nav-item"><a class="nav-link"href="/registeredVoters">Voters</a></li>
                <li class="nav-item"><a class="nav-link"href="/login">LOGIN</a></li>
                
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                        Candidates
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/candidates/create">Candidate Create</a></li>
                        <li><a class="dropdown-item" href="/positions/create">Candidate Position</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>