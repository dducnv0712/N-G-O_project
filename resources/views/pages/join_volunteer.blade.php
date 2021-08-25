@extends('layout')
@section('main')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Become a Volunteer</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Become a Volunteer</span></li>
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
                            <img src="assets/images/resources/become-a-volunteer.jpg" alt="">
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
                        <form action="assets/inc/sendemail.php" class="become-volunteer-page__form contact-form-validated">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="become-volunteer-page__input">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Address" name="address">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Date of Birth" name="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input type="text" placeholder="Occupation" name="Occupation">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn become-volunteer-page__btn"><i class="fas fa-arrow-circle-right"></i>Submit Comment</button>
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
