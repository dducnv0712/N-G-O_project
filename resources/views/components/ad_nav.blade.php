<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle d-flex">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <div class="input-group input-group-navbar">
            <input type="text" class="form-control" placeholder="{{__('Search…')}}" aria-label="Search">
            <button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
            </button>
        </div>
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator">{{__('4')}}</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        {{__('4 New Notifications')}}
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">{{__('Update completed')}}</div>
                                    <div class="text-muted small mt-1">{{__('Restart server 12 to complete the update.')}}</div>
                                    <div class="text-muted small mt-1">{{__('30m ago')}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">{{__('Lorem ipsum')}}</div>
                                    <div class="text-muted small mt-1">{{__('Aliquam ex eros, imperdiet vulputate hendrerit et.')}}</div>
                                    <div class="text-muted small mt-1">{{__('2h ago')}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">{{__('Login from 192.186.1.8')}}</div>
                                    <div class="text-muted small mt-1">{{__('5h ago')}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">{{__('New connection')}}</div>
                                    <div class="text-muted small mt-1">{{__('Christina accepted your request.')}}</div>
                                    <div class="text-muted small mt-1">{{__('14h ago')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">{{__('Show all notifications')}}</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div>
                    <select name="target" class="target bg-transparent border-0 shadow-none focus:outline-none">
                        <option value="vi">Vietnam</option>
                        <option value="hi">India - Hindi</option>
                        <option value="en">English</option>
                    </select><br>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="message-square"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                    <div class="dropdown-menu-header">
                        <div class="position-relative">
                            {{__('4 New Messages')}}
                        </div>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                </div>
                                <div class="col-10 pl-2">
                                    <div class="text-dark">{{__('Vanessa Tucker')}}</div>
                                    <div class="text-muted small mt-1">{{__('Nam pretium turpis et arcu. Duis arcu tortor.')}}</div>
                                    <div class="text-muted small mt-1">{{__('15m ago')}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                </div>
                                <div class="col-10 pl-2">
                                    <div class="text-dark">{{__('William Harris')}}</div>
                                    <div class="text-muted small mt-1">{{__('Curabitur ligula sapien euismod vitae.')}}</div>
                                    <div class="text-muted small mt-1">{{__('2h ago')}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                </div>
                                <div class="col-10 pl-2">
                                    <div class="text-dark">{{__('Christina Mason')}}</div>
                                    <div class="text-muted small mt-1">{{__('Pellentesque auctor neque nec urna.')}}</div>
                                    <div class="text-muted small mt-1">{{__('4h ago')}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                </div>
                                <div class="col-10 pl-2">
                                    <div class="text-dark">{{__('Sharon Lessman')}}</div>
                                    <div class="text-muted small mt-1">{{__('Aenean tellus metus, bibendum sed, posuere ac, mattis non.')}}</div>
                                    <div class="text-muted small mt-1">{{__('5h ago')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="#" class="text-muted">{{__('Show all messages')}}</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
{{--                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">--}}
{{--                    <i class="align-middle" data-feather="settings"></i>--}}
{{--                </a>--}}

                <a class="nav-link " href="#" data-toggle="dropdown">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="avatar img-fluid rounded mr-1"  /> <span class="text-dark">{{Auth::user()->name}}</span>
                </a>
{{--                <div class="dropdown-menu dropdown-menu-right">--}}
{{--                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>--}}
{{--                    <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>--}}
{{--                    <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <div class="dropdown-item">--}}
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}

{{--                            <x-jet-dropdown-link href="{{ route('logout') }}"--}}
{{--                                                 onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                {{ __('Log Out') }}--}}
{{--                            </x-jet-dropdown-link>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </li>
        </ul>
    </div>
</nav>
