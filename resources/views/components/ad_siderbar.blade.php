<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{asset('/')}}">
            <span class="align-middle fw-normal">Admin <span class="fw-bold">N.G.O</span></span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{asset('/admin')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{asset('/admin/profile')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>



            <li class="sidebar-header">
                Website Manager
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{asset('/admin/user')}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">User Manager</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{asset('/admin/category')}}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Posts</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/posts')}}">All Posts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/posts/add')}}">Form</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="heart"></i> <span class="align-middle">Contributions</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">contribute</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Debit Card</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Paypal</a></li>

                </ul>
            </li>

            <li class="sidebar-item">
                <a data-target="#about" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Pages Manager</span>
                </a>
                <ul id="about" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">About</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Debit Card</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Paypal</a></li>

                </ul>
        </ul>

{{--        <div class="sidebar-cta">--}}
{{--            <div class="sidebar-cta-content">--}}
{{--                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>--}}
{{--                <a target="_blank" class="btn btn-primary btn-block">Account Management </a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</nav>
