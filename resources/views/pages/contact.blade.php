@extends('layout')
@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Contact</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Contact</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Contact With Us</span>
                <h2 class="section-title__title">We love to hear from our <br> happy customers</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__left">
                        <div class="contact-page__img">
                            <img src="https://nhandan.vn/imgold/media/k2/items/src/4409/962e4f8a47837ea9f53be6cc1348ff03.jpg" alt="">
                        </div>
                        <p class="contact-page__text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words even slightly believable.</p>
                        <div class="contact-page__contact-info">
                            <ul class="contact-page__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-chat"></span>
                                    </div>
                                    <div class="text">
                                        <p>Call Anytime</p>
                                        <a href="tel:92 666 888 0000">92 666 888 0000</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="text">
                                        <p>Send Email</p>
                                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-address"></span>
                                    </div>
                                    <div class="text">
                                        <p>Visit Office</p>
                                        <h5>80 broklyn golden street</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__form">
                        <form action="assets/inc/sendemail.php" class="contact-page__main-form contact-form-validated">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn contact-page__btn"><i class="fas fa-arrow-circle-right"></i>Send a Message</button>
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
