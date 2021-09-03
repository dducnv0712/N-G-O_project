<nav id="sidebar" class="sidebar">
    @if(Auth::user()->role == 'ADMIN')
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="{{asset('/admin')}}">
                <span class="align-middle fw-normal">Admin <span class="fw-bold">N.G.O</span></span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('/admin')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{__('Trang Chủ')}}</span>
                    </a>
                </li>

{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link" href="{{asset('/admin/profile')}}">--}}
{{--                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>--}}
{{--                    </a>--}}
{{--                </li>--}}



                <li class="sidebar-header">
                   {{__('Quản Lý Website')}}
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('/admin/user')}}">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{__('Quản Lý Người Dùng')}}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{url('/admin/contribution')}}"   class="sidebar-link">
                        <i class="align-middle" data-feather="heart"></i> <span class="align-middle">{{__('Quản Lý Đóng Góp')}}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('/admin/category')}}">
                        <i class="align-middle" data-feather="list"></i> <span class="align-middle">{{__('Thể Loại Dự Án')}}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a data-target="#contact" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle fas fa-envelope-open-text"></i> <span class="align-middle">{{__('Danh Sách Liên Hệ')}}</span>
                    </a>
                    <ul id="contact" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/contact')}}">{{__('Liên Hệ')}}</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/newsletter-sub-list')}}">{{__('Nhận Tin Tức Mới')}}</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="edit"></i> <span class="align-middle">{{__('Dự Án')}}</span>
                    </a>
                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/projects')}}">{{__('Tất Cả Dự Án')}}</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/projects/add')}}">{{__('Thêm Dự Án')}}</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a data-target="#volunteer" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle fas fa-user-tag"></i> <span class="align-middle">{{__('Tình Nguyện Viên')}}</span>
                    </a>
                    <ul id="volunteer" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/volunteer')}}">{{__('Danh Sách Tình Nguyện Viên')}}</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/projects/add')}}">{{__('Thêm Tình Nguyện Viên')}}</a></li>
                    </ul>
                </li>


                <li class="sidebar-item">
                    <a data-target="#about" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle fas fa-tasks"></i> <span class="align-middle">{{__('Quản Lý Các Trang')}}</span>
                    </a>
                    <ul id="about" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">About</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/admin/gallery')}}">{{__('Thư Viện Ảnh')}}</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" id="file-manager" data-input="thumbnail" data-preview="holder" >{{__('Quản Lý Tệp')}}</a></li>
                    </ul>
                </li>

            </ul>

            {{--        <div class="sidebar-cta">--}}
            {{--            <div class="sidebar-cta-content">--}}
            {{--                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>--}}
            {{--                <a target="_blank" class="btn btn-primary btn-block">Account Management </a>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </div>
    @else
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="{{asset('/volunteer-dashboard')}}">
                <span class="align-middle fw-normal">Admin <span class="fw-bold">N.G.O</span></span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{asset('/volunteer-dashboard')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{__('Trang Chủ')}}</span>
                    </a>
                </li>

{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link" href="{{asset('/author/profile')}}">--}}
{{--                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>--}}
{{--                    </a>--}}
{{--                </li>--}}



                <li class="sidebar-header">
                    {{__('Quản Lý Website')}}
                </li>

                <li class="sidebar-item">
                    <a href="{{url('/volunteer-dashboard/contribution')}}"   class="sidebar-link">
                        <i class="align-middle" data-feather="heart"></i> <span class="align-middle">{{__('Quản Lý Đóng Góp')}}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="edit"></i> <span class="align-middle">{{__('Dự Án')}}</span>
                    </a>
                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/volunteer-dashboard/projects')}}">{{__('Tất Cả Dự Án')}}</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/volunteer-dashboard/projects/add')}}">{{__('Thêm Dự Án')}}</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a data-target="#about" data-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle fas fa-tasks"></i> <span class="align-middle">{{__('Quản Lý Các Trang')}}</span>
                    </a>
                    <ul id="about" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="{{asset('/volunteer-dashboard/gallery')}}">{{__('Thư Viện Ảnh')}}</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" id="file-manager-volunteer" data-input="thumbnail" data-preview="holder" >{{__('Quản Lý Tệp')}}</a></li>
                    </ul>
                </li>
            </ul>


            {{--        <div class="sidebar-cta">--}}
            {{--            <div class="sidebar-cta-content">--}}
            {{--                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>--}}
            {{--                <a target="_blank" class="btn btn-primary btn-block">Account Management </a>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </div>
    @endif

</nav>
