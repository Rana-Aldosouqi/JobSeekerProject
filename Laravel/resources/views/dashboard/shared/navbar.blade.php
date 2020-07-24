<nav class="navbar navbar-expand-lg navbar-dark shadow-sm " style="background: #2A2A2C; color: #e9ece5;
 font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
    <a class="navbar-brand" href="#"><h1 style="color: #004bff;" id="lgoo"><span style="color: white">Job</span >seeker</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <input class="form-control form-control-dark w-60" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary ml-1 rounded">Search</button>
    </div>
    <div>
        <ul class="navbar-nav ml-auto text-center" style="font-size: large;">
            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/companyprofile"><h6>Profile</h6></a>
                        <a class="dropdown-item" href="/Logout"><h6>LogOut</h6></a>
                    </div>
                </li>
            @else
                <li class="nav-item ">
                    <a class="nav-link" href="/Login">Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/Register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

