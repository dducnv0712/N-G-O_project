<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{asset('/')}}">
            <span class="align-middle">AdminKit</span>
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
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Posts</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">All Posts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Form</a></li>
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
                <a data-target="#category" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Category</span>
                </a>
                <ul id="category" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">About</a></li>
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
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>
            </li>
        </ul>

{{--        <div class="sidebar-cta">--}}
{{--            <div class="sidebar-cta-content">--}}
{{--                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>--}}
{{--                <a target="_blank" class="btn btn-primary btn-block">Account Management </a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</nav>
