<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{asset('/admin')}}">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-header">
                Tools & Components
            </li>


               <li class="sidebar-item">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Contribute</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/contributor')}}">Contributor</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/credit-cart')}}">Credit cart</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/digital-wallet')}}">Digital Wallet</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/add')}}">Add Contribute</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/list')}}">List Contribute</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/update')}}">Update Contribute</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-target="#form" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
                </a>
                <ul id="form" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
                </ul>
            </li>

            <a class="sidebar-link" href="{{asset('/user-list')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">USER</span>
            </a>


        </ul>

    </div>
</nav>
