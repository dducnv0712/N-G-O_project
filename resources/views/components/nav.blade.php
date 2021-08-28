
<header class="main-header clearfix">
    <div class="main-header__logo">
        <a href="{{url('/')}}">
            <img class="ms-3" src="{{asset('dist/assets/images/resources/Charity -logo-white.png')}}" alt="">
        </a>
    </div>
    <div class="main-menu-wrapper">
        <div class="main-menu-wrapper__top">
            <div class="main-menu-wrapper__top-inner">
                <div class="main-menu-wrapper__left">
                    <div class="main-menu-wrapper__left-content">
                        <div class="main-menu-wrapper__left-text">
                            <p>{{__('Giúp đỡ lẫn nhau có thể làm cho thế giới tốt đẹp hơn')}}</p>
                        </div>
                        <div class="main-menu-wrapper__left-email-box">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="email">
                                <a href="mailto:needhelp@company.com">ngoproject.fpt2021@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-menu-wrapper__right d-flex">
                    <div class="main-menu-wrapper__right-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="ms-4" >

                    <div class="dropdown main-menu-wrapper__right-lang">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                    <li><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="main-menu-wrapper__bottom">
            <nav class="main-menu">
                <div class="main-menu__inner">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class=" {{ Route::is('/') ? 'current' : null }}">
                            <a href="{{url('/')}}">{{__('Trang Chủ')}}</a>

                        </li>
                        <li class="{{ Request::url() == url('/become-a-volunteer') ||  Request::url() == url('/volunteer') ||  Request::url() == url('/gallery') ||  Request::url() == url('/contributor') ||  Request::url() == url('/project') ? 'dropdown current' : 'dropdown' }}">
                            <a href="javascript:void(0)">{{__('Hoạt Động')}}</a>
                            <ul>
                                <li><a href="{{url('/contributor')}}">{{__('Danh Sách Đóng Góp')}}</a></li>
                                <li><a href="{{url('/project')}}">{{__('Tất Cả Dự Án')}}</a></li>
                                <li><a href="{{url('/gallery')}}">{{__('Thư Viện Ảnh')}}</a></li>
                                <li><a href="{{url('/volunteer')}}">{{__('Tình Nguyện Viên')}}</a></li>
                                <li><a href="{{'/become-a-volunteer'}}">{{__('Đăng Ký Tình Nguyện Viên')}}</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::url() == url('/about')  ? ' current' : '' }}">
                            <a href="{{asset('/about')}}">{{__('Giới Thiệu')}}</a>
                        </li>
                        <li class="{{ Request::url() == url('/contact')  ? ' current' : '' }}">
                            <a href="{{asset('/contact')}}">{{__('Liên Hệ')}}</a>
                        </li>
                    </ul>
                    <div class="main-menu__right">

                        <a href="javascript:void(0)" class="main-menu__search search-toggler icon-magnifying-glass"></a>

                            @if(Auth::user() == null)
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#account-modal" class="main-menu__cart">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            @else
                            <div class="dropdown">
                                <a class="main-menu__cart" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{url('/profile')}}">{{__('Tài Khoản Của Tôi')}}</a></li>
                                    @if(Auth::user()->role =='AUTHOR')
                                    <li><a class="dropdown-item" href="{{url('/author/posts')}}">My Posts</a></li>
                                    @elseif(Auth::user()->role == "ADMIN")
                                    <li><a class="dropdown-item" href="{{url('/admin')}}">Dashboard</a></li>
                                    @endif

                                  <li><hr class="dropdown-divider"></li>
                                  <li>
                                      <a class="dropdown-item d-flex justify-content-center align-items-center" >
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="bg-transparent border-0" type="submit">  <i class="fas fa-sign-out-alt me-1"></i>{{__('Đăng Xuất')}}</button>
                                        </form>
                                    </a>
                                </li>
                                </ul>
                              </div>
                            @endif


                        <div class="main-menu__phone-contact">
                            <div class="main-menu__phone-icon">
                                <span class="icon-chat"></span>
                            </div>
                            <div class="main-menu__phone-number">
                                <p>{{__('Gọi mọi lúc')}}</p>
                                <a href="tel:92 666 888 0000">92 666 888 0000</a>
                            </div>
                        </div>
                        <a href="{{url('/donate')}}" class="main-menu__donate-btn"><i class="fa fa-heart"></i>{{__('Đóng Góp')}}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="modal fade"  id="account-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog  modal-dialog-centered modal-dialog-scrollable modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">

                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button style="outline: none !important" class="nav-link active border-none shadow-none" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">{{__('Đăng Nhập')}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button style="outline: none !important"  class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">{{__('Đăng Ký Tài Khoản')}}</button>
                                </li>
                            </ul>


                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane mt-2 fade show active account-form" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('login') }}" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 mb-3 mt-3">
                                                <div class="login_and_register_input">
                                                    <label for="email">{{__('Địa Chỉ Email')}}</label>
                                                    <input type="email" aria-describedby="emailHelp" id="email" name="email" required >
                                                </div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <div class="login_and_register_input">
                                                    <label for="password">{{__('Mật Khẩu')}}</label>
                                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">                                                    </div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">{{__('Remember me')}}</label>
                                            </div>
                                            <div class="d-flex">
                                                <button type="submit" class="btn-primary-web me-3">{{__('Đăng Nhập')}}</button>
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-center d-flex align-items-end text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Quên Mật Khẩu?') }}
                                                    </a>
                                                @endif
                                            </div>

                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane account-form mt-2 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{route('register')}}" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 mb-3 mt-3">
                                                <div class="login_and_register_input">
                                                    <label for="name">{{__('Họ và Tên')}}</label>
                                                    <input type="text" class="form-control"  aria-describedby="emailHelp" id="name" name="name" required autocomplete="name">                                                    </div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <div class="login_and_register_input">
                                                    <label for="email">{{__('Địa Chỉ Email')}}</label>
                                                    <input type="email" class="form-control"  aria-describedby="emailHelp" id="email" name="email" required >                                                    </div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <div class="login_and_register_input">
                                                    <label for="password">{{__('Mật Khẩu')}}</label>
                                                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">                                                    </div>
                                            </div>

                                            <div class="col-xl-12 mb-3">
                                                <div class="login_and_register_input">
                                                    <label for="password">{{__('Nhập Lại Mật Khẩu')}}</label>
                                                    <input type="password" class="form-control" id="password" name="password_confirmation" required autocomplete="current-password">                                                    </div>
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                    <div>
                                                        <label for="terms">
                                                            <div class="flex items-center">
                                                                <input type="checkbox" name="terms" id="terms"/>

                                                                <div class="ml-2">
                                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                    ]) !!}
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="d-flex">
                                                <button type="submit" class="btn-primary-web me-3">{{__('Đăng Ký')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>



<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
