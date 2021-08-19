<nav style="z-index: 999" class="navbar-head navbar m-0 p-0">
    <div class="container align-items-center">
     <div>
         <select name="target" class="target bg-transparent focus:outline-none shadow-none ">
             <option>Select</option>
             <option value="vi">Vietnam</option>
             <option value="hi">India - Hindi</option>
             <option value="en">English</option>

         </select><br>
     </div>
        <div class="d-flex">
            <div class="me-2">
                <a data-bs-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <div>
                @if(!Auth::user() == "")
                    <div class="dropdown">
                        <a   id="account" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="account">
                            <li><a class="dropdown-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </a></li>
                        </ul>
                    </div>
                @else
                    <a href="{{asset('/login')}}">Login</a> <span>|</span> <a href="{{asset('/login')}}">register</a>
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
                <button style="height:58px" class="btn btn-primary shadow-none" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
<nav style="z-index: 999"  class="navbar navbar-expand-lg  ftco_navbar m-0 p-0 ftco-navbar-light" id="ftco-navbar">
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
                <li class="nav-item"><a href="{{url('/gallery')}}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{url('/posts-list')}}" class="nav-link">Posts List</a></li>
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
