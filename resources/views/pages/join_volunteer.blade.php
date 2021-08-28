@extends('layout')
@section('main')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{asset('/dist/img/photos/nu-cuoi-am-crop.jpg')}}');background-position:center"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Trở Thành Tình Nguyện Viên')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Đăng Ký Tình Nguyện Viên')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Become Volunteer Page Start-->
    <section class="become-volunteer-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Register Now</span>
                <h2 class="section-title__title">Let’s join our community to <br> become a volunteer</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer-page__left">
                        <div class="become-volunteer-page__img">
                            <img src="{{asset('/dist/img/photos/nucuoiam.jpg')}}" alt="">
                        </div>
                        <h3 class="become-volunteer-page__title">Requirements</h3>
                        <p class="become-volunteer-page__text">Aliquam hendrerit a augue insu image pellentes que id erat quis sollicitud null mattis Ipsum is simply dummy typesetting industry. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in meifn pericula euripidis, hinc partem ei est. Eos ei nisl graecis, aperiri consequat anlorem tincidun.</p>
                        <ul class="become-volunteer-page__list list-unstyled">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Making this first true generator simply text</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Many desktop publish packages nothing</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>Lorem Ipsum is not simply free text</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>If you are going to passage</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="text">
                                    <p>It has roots in a piece</p>
                                </div>
                            </li>
                        </ul>
                        <div class="become-volunteer-page__phone">
                            <div class="become-volunteer-page__phone-icon">
                                <span class="icon-chat"></span>
                            </div>
                            <div class="become-volunteer-page__phone-text">
                                <p>Call Anytime</p>
                                <a href="tel:92 666 888 0000">92 666 888 0000</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer-page__right">
                        <form  class="become-volunteer-page__form contact-form-validated">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input id="name-volunteer" type="text" placeholder="{{__('Tên Của Bạn')}}" name="name" value="@if(!Auth::user() == null) {{Auth::user()->name}} @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="become-volunteer-page__input">
                                        <input id="email-volunteer" type="email" placeholder="{{__('Địa chỉ Email')}}" name="email" value="@if(!Auth::user() == null) {{Auth::user()->email}} @endif">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="become-volunteer-page__input">
                                        <input id="phone-volunteer" type="text" placeholder="{{__('Số Điện Thoại')}}" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input id="address-volunteer" type="text" placeholder="{{__('Địa Chỉ')}}" name="address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input id="date-volunteer" title="{{__('Ngày Sinh')}}" type="text"  onfocus="(this.type='date')" onblur="(this.type='text')"  placeholder="{{__('Ngày Sinh')}}" max="{{$now}}">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input id="job-volunteer" type="text" placeholder="{{__('Công Việc')}}" name="Occupation">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <textarea id="message-volunteer" name="message" placeholder="{{__('Lời Nhắn')}}"></textarea>
                                    </div>
                                    <button type="button" id="register-volunteer" class="thm-btn become-volunteer-page__btn"><i class="fas fa-arrow-circle-right"></i>{{__('Đăng Ký')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer Page End-->
@endsection
