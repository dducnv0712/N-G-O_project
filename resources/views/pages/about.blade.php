@extends('layout')
@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url('{{asset('/dist/img/photos/nu-cuoi-am-about.jpg')}}');background-position:bottom"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Giới Thiệu')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Giới Thiệu')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Page Start-->
    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-page__left">
                        <div class="about-page__img">
                            <img src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/61307a993e94495287e246b5_Thi%E1%BA%BFt%20k%E1%BA%BF%20kh%C3%B4ng%20t%C3%AAn%20(2).png" alt="">
                            <div class="about-page__trusted">
                                <h3>We’re trusted by <span>9,8750</span> donors</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Inroductions</span>
                            <h2 class="section-title__title">We believe that we can save more lifes</h2>
                        </div>
                        <p class="about-page__right-text">We are trusted by our clients and have a reputation for
                            the best services in the field. Lorem ipsum is simply free text dolor sit amett
                            consectetur adipiscing elit. It is a long established fact that a reader will be
                            distracted by the readable content of a page.</p>
                        <h3 class="about-page__right-title">Halpes is the largest global crowdfunding community in
                            the world</h3>
                        <div class="about-five__progress-wrap">

                            <div class="about-five__progress">
                                <div class="about-five__progress-box">
                                    <div class="circle-progress"
                                         data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#e5eeec","lineCap": "square", "size": 138, "fill": { "color": "#15c8a0" } }'>
                                    </div><!-- /.circle-progress -->
                                    <span>90%</span>
                                </div>
                                <div class="about-five__progress-content">
                                    <h3>Successful causes</h3>
                                </div>
                            </div>
                            <div class="about-five__progress">
                                <div class="about-five__progress-box">
                                    <div class="circle-progress"
                                         data-options='{ "value": 0.5,"thickness": 3,"emptyFill": "#e5eeec","lineCap": "square", "size": 138, "fill": { "color": "#15c8a0" } }'>
                                    </div><!-- /.circle-progress -->
                                    <span>50%</span>
                                </div><!-- /.about-five__progress-box -->
                                <div class="about-five__progress-content">
                                    <h3>Amazing donors</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Page Start-->

    <!--Testimonial One Start-->
    <section class="testimonial-one about-page-testimonial">
        <div class="testimonial-one-bg"
             style="background-image: url(assets/images/backgrounds/testimonial-1-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Testimonials</span>
                            <h2 class="section-title__title">What they’re talking about charity</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-theme owl-carousel">
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                    consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-img-1.png" alt="">
                                        <div class="testimonial-one__quote">

                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-name">
                                        <h3>Kevin Martin</h3>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                    consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-img-2.png" alt="">
                                        <div class="testimonial-one__quote">

                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-name">
                                        <h3>Jessica Brown</h3>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                    consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-img-1.png" alt="">
                                        <div class="testimonial-one__quote">

                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-name">
                                        <h3>Jessica Brown</h3>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                    consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua.</p>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-img-2.png" alt="">
                                        <div class="testimonial-one__quote">

                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-name">
                                        <h3>Kevin Martin</h3>
                                        <p>Volunteer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Join One Start-->
    <section class="join-one join-one__about">
        <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(assets/images/backgrounds/join-one-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="join-one__inner">
                        <h2 class="join-one__title">Join the community to give <br> education for children</h2>
                        <a href="#" class="join-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Join One End-->

    <!--Counters One Start-->
    <section class="counters-one about-page-counter">
        <div class="container">
            <ul class="counters-one__box list-unstyled">
                <li class="counter-one__single">
                    <h3 class="odometer" data-count="870">00</h3><span class="counter-one__letter">K</span>
                    <p class="counter-one__text">Total Donations</p>
                </li>
                <li class="counter-one__single">
                    <h3 class="odometer" data-count="480">00</h3>
                    <p class="counter-one__text">Campaigns Closed</p>
                </li>
                <li class="counter-one__single">
                    <h3 class="odometer" data-count="977">00</h3><span class="counter-one__letter">K</span>
                    <p class="counter-one__text">Happy People</p>
                </li>
                <li class="counter-one__single">
                    <h3 class="odometer" data-count="63">00</h3><span class="counter-one__letter">+</span>
                    <p class="counter-one__text">Our Volunteers</p>
                </li>
            </ul>
        </div>
    </section>
    <!--Counters One Start-->

    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Professional Volunteers</span>
                <h2 class="section-title__title">Meet the best team behind <br> our success story</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-one-img-1.jpg" alt="">
                            </div>
                            <div class="team-one__member-name">
                                <h2>Janne</h2>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__member-title">Volunteer</h4>
                            <p class="team-one__text-box">There are many of lorem ipsum available but the have in
                                some form.</p>
                        </div>
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-one-img-2.jpg" alt="">
                            </div>
                            <div class="team-one__member-name">
                                <h2>David</h2>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__member-title">Volunteer</h4>
                            <p class="team-one__text-box">There are many of lorem ipsum available but the have in
                                some form.</p>
                        </div>
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Team One Single-->
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/team-one-img-3.jpg" alt="">
                            </div>
                            <div class="team-one__member-name">
                                <h2>Sarah</h2>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h4 class="team-one__member-title">Volunteer</h4>
                            <p class="team-one__text-box">There are many of lorem ipsum available but the have in
                                some form.</p>
                        </div>
                        <div class="team-one__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one__carousel owl-theme owl-carousel">
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="assets/images/resources/brand-1-1.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="assets/images/resources/brand-1-2.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="assets/images/resources/brand-1-3.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="assets/images/resources/brand-1-4.png" alt="">
                            </div>
                        </div>
                        <!--Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__img">
                                <img src="assets/images/resources/brand-1-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

@endsection

