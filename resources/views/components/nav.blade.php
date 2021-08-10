<nav class="navbar-head navbar m-0 p-0">
    <div class="container align-items-center">
     <div>

     </div>
        <div class="d-flex">
            <div class="me-2">
                <a data-bs-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <div>
                @if(!Auth::user() == "")
                    <a href="{{asset('/profile')}}">{{Auth::user()->name}}</a>
                @else
                    <a href="{{asset('/account')}}">Login</a> <span>|</span> <a href="{{asset('/account')}}">register</a>
                @endif
            </div>
        </div>
    </div>
</nav>
<div class="collapse" id="search">
    <div class="card card-body">
        <div class="container">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary shadow-none" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg  ftco_navbar m-0 p-0 ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}">Welfare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <div class="container user mt-3">
                <button class="btn shadow-none mb-2" style="width:100%">Login</button>
                <button class="btn shadow-none" style="width:100%">register</button>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{url('/donate')}}" class="nav-link">Donate</a></li>
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>

            </ul>

            <div class="search">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary shadow-none" type="submit">Search</button>
                </form>
            </div>

        </div>
    </div>
</nav>
