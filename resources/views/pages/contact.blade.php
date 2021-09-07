@extends('layout')
@section('page_title',__('Liên Hệ'))

@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{asset('/dist/img/photos/nu-cuoi-am-crop.jpg')}}');background-position:center"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Liên Hệ')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Liên Hệ')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">{{__('Liên Hệ Với Chúng Tôi')}}</span>
                <h2 class="section-title__title">{!!  __('Chúng tôi muốn nghe <br> những ý kiến đóng góp của các bạn')!!}</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__left">
                        <div class="contact-page__img">
                            <img src="https://nhandan.vn/imgold/media/k2/items/src/4409/962e4f8a47837ea9f53be6cc1348ff03.jpg" alt="">
                        </div>
{{--                        <p class="contact-page__text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words even slightly believable.</p>--}}
                        <div class="contact-page__contact-info">
                            <ul class="contact-page__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-chat"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{__('Điện Thoại')}}</p>
                                        <a href="tel:92 666 888 0000">92 666 888 0000</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{__('Địa Chỉ Email')}}</p>
                                        <a href="mailto:ngoproject.fpt2021@gmail.com">ngoproject.fpt2021@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-address"></span>
                                    </div>
                                    <div class="text">
                                        <p>{{__('Địa Chỉ')}}</p>
                                        <h5>Hà Nội, Việt Nam</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__form">
                        <form  class="contact-page__main-form contact-form-validated">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" id="name-contact" placeholder="{{__('Họ và Tên')}}" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="email" id="email-contact" placeholder="{{__('Địa Chỉ Email')}}" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" id="phone-contact" placeholder="{{__('Số Điện Thoại')}}" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" id="message-contact" placeholder="{{__('Lời Nhắn')}}"></textarea>
                                    </div>
                                    <button type="button" id="submit-contact" class="thm-btn contact-page__btn"><i class="fas fa-arrow-circle-right"></i>{{__('Gửi Lời Nhắn')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact page End-->
@endsection
