@extends('layout')
@section('main')

<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,"effect": "fade",
         "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(dist/assets/images/backgrounds/main-slider-1-1.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                    More</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="dist/assets/images/shapes/main-slider-1-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                    More</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="assets/images/shapes/main-slider-1-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-3-1.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                    More</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="assets/images/shapes/main-slider-1-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider__counter">
            <ul class="main-slider__counter-box list-unstyled">
                <li class="counter-animate">
                    <h3 class="main-sldier__counter-digit number" data-number="300">0</h3>
                    <span class="main-slider__counter-text">{{__('Tình Nguyện Viên')}}</span>
                </li>
                <li class="counter-animate">
                    <h3 class="main-sldier__counter-digit number" data-number="{{count($count_contribute)}}"></h3>
                    <span class="main-slider__counter-text">{{__('Là Dự Án Chúng Tôi Đã Hoàn ')}}</span>
                </li>
                <li style="max-width:450px;height:191px" class="counter-animate">
                    <div class="d-flex">
                        <h3 class="main-sldier__counter-digit number" data-number="{{$amount_total}}">0 </h3>
                        <span >VNĐ</span>
                    </div>
                    <span class="main-slider__counter-text">{{__('Là Số Tiền Chúng Tôi Đã Nhận Được Từ Các Nhà Hảo Tâm')}}</span>


                </li>
            </ul>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

<!--Welcome One Start-->
@if(count($important) > 0)
<section class="welcome-one">
    <div class="container">
        @foreach($important as $item_important)
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img-box">

                        <img src="{{$item_important->getImage()}}" alt="">
                        <!-- <div class="welcome-one__img-box-2">
                            <img src="assets/images/resources/welcome-one-img-2.jpg" alt="">
                        </div> -->
                        <h2 class="welcome-one__bottom-text">Dự Án Quan Trọng</h2>
                        <div class="welcome-one__heart-icon">
                            <img src="{{asset('dist/assets/images/resources/welcome-one-heart-icon.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Giúp đỡ lẫn nhau có thể làm cho thế giới tốt đẹp hơn</span>
                        <h2 class="section-title__title">{{$item_important->title}}</h2>
                    </div>
                    <p class="welcome-one__right-text">{!! __($item_important->description) !!}</p>
                    <!-- <div class="welcome-one__our-mission-and-story">
                        <div class="welcome-one__mission-and-story-single">
                            <h3><i class="fas fa-arrow-circle-right"></i>Our Mission</h3>
                            <p class="welcome-one__our-mission-and-story-text">Lorem ipsum dolor sit amet not is consectetur notted.</p>
                        </div>
                        <div class="welcome-one__mission-and-story-single">
                            <h3><i class="fas fa-arrow-circle-right"></i>Our Story</h3>
                            <p class="welcome-one__our-mission-and-story-text">Lorem ipsum dolor sit amet not is consectetur notted.</p>
                        </div>
                    </div> -->
                    <div class="welcome-one__progress">
                        <!-- <div class="welcome-one__progress-single">
                            <h4 class="welcome-one__progress-title">Charity</h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="83%">
                                    <div class="count-text">83%</div>
                                </div>
                            </div>
                        </div> -->
                        <div class="welcome-one__progress-single">
                            @if(!$item_important->contribute == null)
                                @if($amount_important/$item_important->contribute * 100 >= 100)

                                @else
                                    <div class="bar mt-4">
                                        <div class="bar-inner count-bar" data-percent="{{$amount_important/$item_important->contribute * 100}}%">
                                            <div class="count-text">{{round($amount_important/$item_important->contribute * 100)}}%</div>
                                        </div>
                                    </div>
                                @endif
                                    <div class="causes-one__goals">
                                        <p>Huy Dong: <span>@money($item_important->contribute*22854)</span></p>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p>Góp Duoc: <span>@money($amount_important*22854)</span></p>
                                    </div>

                            @else
                                <div class="causes-one__goals">
                                    <p>Huy Động: <span>Không Giới Hạn</span></p>
                                </div>
                                <div class="causes-one__goals">
                                    <p>Góp Được: <span>@money($amount_important*22854)</span></p>
                                </div>
                            @endif


                        </div>
                    </div>
                    <a href="{{url('/donate',['id'=>$item_important->id])}}" class="welcome-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>{{__('Đóng Góp')}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif
<!--Welcome One End-->

<!--Causes One Start-->
@foreach($category as $item)
        @if($item->post_count > 0)
            <section class="causes-one">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">{{__('Các Dự Án')}}</span>
                        <h2 class="section-title__title">{{__($item->name)}}</h2>
                        <div class="text-center ">
                            <a href="#" class="btn-sm thm-btn mt-4 mb-3"><i class="fas fa-arrow-circle-right"></i>
                                {{__('Xem Thêm Về Dự Án')}}
                                </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="causes-one__carousel owl-theme owl-carousel">
                                @foreach($posts as $item_post)

                                @if($item_post->category_id == $item -> id && $item_post->important == 1)
                                    @php
                                        $amount = 0;

                                         foreach ($contribution as $item_con ){
                                             if($item_con->id_post == $item_post->id)
                                             $amount += $item_con->contribute_amount;
                                             }
                                    @endphp

                                <div class="causes-one__single fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">

                                    <div class="causes-one__img">
                                        <div class="causes-one__img-box">
                                            <img src="{{$item_post->getImage()}}" alt="">
                                            <a href="#">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        @if(!$item_post->contribute == null)
                                        @if($amount/$item_post->contribute * 100 >= 100)
                                        <div class="causes-one__active">
                                            <span>Đã Hoàn Thành</span>
                                        </div>
                                            @else
                                            <div class="causes-one__inactive">
                                                <span>Đang Hoạt Động</span>
                                            </div>
                                        @endif
                                        @else
                                            <div class="causes-one__inactive">
                                            <span>Đang Hoạt Động</span>
                                        </div>
                                    @endif

                                    </div>
                                    <div class="causes-one__content">
                                        <h3 class="causes-one__title">
                                            <a href="{{url('/desc-post',['id'=>$item_post->id])}}">{{__($item_post->title)}}</a>
                                        </h3>
                                        <p class="causes-one__text">
                                            {!!__($item_post->description)!!}
                                        </p>
                                    </div>
                                    <div class="causes-one__progress">
                                        {{-- <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="{{$amount/$item_post->contribute * 100}}%">
                                                <div class="count-text">{{round($amount/$item_post->contribute * 100)}}%</div>
                                            </div>
                                        </div> --}}
                                        @if(!$item_post->contribute == null)
                                            @if($amount/$item_post->contribute * 100 >= 100)
                                                @else
                                                <div class="bar">
                                                    <div class="bar-inner count-bar" data-percent="{{$amount/$item_post->contribute * 100}}%">
                                                        <div class="count-text">{{round($amount/$item_post->contribute * 100)}}%</div>
                                                    </div>
                                                </div>
                                            @endif

                                        @endif

                                        @if($item_post->contribute == null)
                                            <div class="causes-one__goals">
                                                <p>Huy Dong: <span>Không Giới Hạn</span></p>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p>Góp Duoc: <span>@money($amount*22854)</span></p>
                                            </div>
                                        @else
                                            <div class="causes-one__goals">
                                                <p>Huy Dong: <span>@money($item_post->contribute*22854)</span></p>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p>Góp Duoc: <span>@money($amount*22854)</span></p>
                                            </div>
                                        @endif

                                        <div class="text-center">
                                            @if(!$item_post->contribute == null)
                                            @if($amount/$item_post->contribute * 100 >= 100)
                                            <a href="{{url('/desc-post',['id'=>$item_post->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fas fa-arrow-circle-right me-2"></i>{{__('Xem Chi Tiết')}}</a>
                                            @else
                                            <a href="{{url('/donate',['id'=>$item_post->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fa fa-heart me-2"></i>{{__('Đóng Góp')}}</a>
                                            @endif
                                        @else
                                            <a href="{{url('/donate',['id'=>$item_post->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fa fa-heart me-2"></i>{{__('Đóng Góp')}}</a>
                                        @endif
                                        </div>
                                    </div>

                                </div>


                                @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif
@endforeach
<!--Causes One End-->

<!--Join One Start-->
<section class="join-one">
    <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/join-one-bg.jpg)"></div>
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

<!--Three Boxes Start-->
<section class="three-boxes">
    <div class="container-box">
        <div class="row">
            <div class="col-xl-4">
                <!--Three Boxes Single-->
                <div class="three-boxes__single">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span class="icon-fast-food"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>Healthy Food</h2>
                            <p class="three-boxes__text">Lorem ipsum is simply free text available amet, consectetuer adipiscing elit. There are not many passages of ipsum.</p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Donate </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!--Three Boxes Single-->
                <div class="three-boxes__single three-boxes__single-item-two">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span class="icon-water"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>Clean Water</h2>
                            <p class="three-boxes__text">Lorem ipsum is simply free text available amet, consectetuer adipiscing elit. There are not many passages of ipsum.</p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Donate </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!--Three Boxes Single-->
                <div class="three-boxes__single three-boxes__single-item-three">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span class="icon-health-check"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>Medical Treatment</h2>
                            <p class="three-boxes__text">Lorem ipsum is simply free text available amet, consectetuer adipiscing elit. There are not many passages of ipsum.</p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Donate </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Three Boxes End-->



<!--Gallery One Start-->
<section class="gallery-one mt-5">
    <div class="gallery-one__container-box clearfix">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/gallery/gallery-1-2.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/gallery/gallery-1-3.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/gallery/gallery-1-4.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/gallery/gallery-1-5.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Gallery One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one-bg" style="background-image: url(assets/images/backgrounds/testimonial-1-bg.jpg)"></div>
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
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
