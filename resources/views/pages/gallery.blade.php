@extends('layout')
@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{asset('/dist/img/photos/nucuoiam-gallery.jpg')}}');background-position:center"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Thư Viện Ảnh')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Thư Viện Ảnh')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Gallery page Start-->
    <section class="gallery-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-1.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-2.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-3.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-4.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-5.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-6.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <a class="image-popup" href="{{asset('/dist/img/photos/nucuoiam.jpg')}}">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img-box">
                                <img class="img-gallery" src="{{asset('/dist/img/photos/nucuoiam.jpg')}}" alt="hello">
                                <div class="gallery-page__hover-content-box">
                                    <h2>Child Education</h2>
                                    <p>Charity</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <a class="image-popup" href="{{asset('/dist/img/photos/nucuoiam.jpg')}}">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img-box">
                                <img class="img-gallery" src="{{asset('/dist/img/photos/nucuoiam.jpg')}}" alt="hello anh 2">
                                <div class="gallery-page__hover-content-box">
                                    <h2>Child Education</h2>
                                    <p>Charity</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-8.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Gallery page Single-->
                    <div class="gallery-page__single">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/gallery-page-img-9.jpg" alt="">
                            <div class="gallery-page__hover-content-box">
                                <h2>Child Education</h2>
                                <p>Charity</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery page End-->


@endsection
