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
                <div class="image-layer" style="background-image: url('https://quybongsen.org/wp-content/uploads/2018/06/bannerkid.jpg');">
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
{{--                                <div class="main-slider__shape-1 zoom-fade">--}}
{{--                                    <img src="https://quybongsen.org/wp-content/uploads/2018/06/bannerkid.jpg" alt="">--}}
{{--                              </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url('https://i-english.vnecdn.net/2018/04/06/muusinhgiaretVnExpress13-15229-5121-4772-1522987407_r_680x408.jpg');">
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
{{--                                <div class="main-slider__shape-1 zoom-fade">--}}
{{--                                    <img src="https://i-english.vnecdn.net/2018/04/06/muusinhgiaretVnExpress13-15229-5121-4772-1522987407_r_680x408.jpg" alt="">--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url('https://i-english.vnecdn.net/2021/08/25/WEBQUYN4795-1629891285-5236-1629891317_r_680x408.jpg');background-position: center">
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
{{--                                <div class="main-slider__shape-1 zoom-fade">--}}
{{--                                    <img src="assets/images/shapes/main-slider-1-shape-1.png" alt="">--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider__counter">
            <ul class="main-slider__counter-box list-unstyled">
                <li style="height:192px" class="counter-animate">
                    <h3 class="main-sldier__counter-digit number" data-number="{{count($volunteer)}}">0</h3>
                    <span class="main-slider__counter-text">{{__('Tình Nguyện Viên')}}</span>
                </li>
                <li style="height:192px"  class="counter-animate">
                    <h3 class="main-sldier__counter-digit number" data-number="{{count($count_contribute)}}"></h3>
                    <span class="main-slider__counter-text">{{__('Dự Án Đã Hoàn Thành')}}</span>
                </li>
                <li style="max-width:450px;height:192px" class="counter-animate">
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
                        <h2 class="welcome-one__bottom-text">{{__('Dự Án Quan Trọng')}}</h2>
                        <div class="welcome-one__heart-icon">
                            <img src="{{asset('dist/assets/images/resources/welcome-one-heart-icon.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">{{__('Giúp đỡ lẫn nhau có thể làm cho thế giới tốt đẹp hơn')}}</span>
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
                                        <p>{{__('Huy Động')}}: <span>@money($item_important->contribute*22854)</span></p>
                                    </div>
                                    <div class="causes-one__goals">
                                        <p>{{__('Góp Được')}}: <span>@money($amount_important*22854)</span></p>
                                    </div>

                            @else
                                <div class="causes-one__goals">
                                    <p>{{__('Huy Động')}}: <span>{{__('Không Giới Hạn')}}</span></p>
                                </div>
                                <div class="causes-one__goals">
                                    <p>{{__('Góp Được')}}: <span>@money($amount_important*22854)</span></p>
                                </div>
                            @endif


                        </div>
                    </div>
                    <div class="d-flex">
                        <a href="{{url('/donate',['id'=>$item_important->id])}}" class="welcome-one__btn me-2 thm-btn"><i class="fa fa-heart"></i>{{__('Đóng Góp')}}</a>
                        <a href="{{url('/details-project',['id'=>$item_important->id])}}" class="welcome-one__btn ms-1 thm-btn"><i class="fas fa-arrow-circle-right"></i>{{__('Xem Chi Tiết')}}</a>

                    </div>
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
        @if($item->project_count > 0)
            <section class="causes-one">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">{{__('Các Dự Án')}}</span>
                        <h2 class="section-title__title">{{__($item->name)}}</h2>
                        <div class="text-center ">
                            <a href="{{url('/project',['id'=>$item->id])}}" class="btn-sm thm-btn mt-4 mb-3"><i class="fas fa-arrow-circle-right"></i>
                                {{__('Xem Thêm Về Dự Án')}}
                                </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="causes-one__carousel owl-theme owl-carousel">
                                @foreach($projects as $item_post)

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
                                            <img style="max-height: 230px;" src="{{$item_post->getImage()}}" alt="">
                                            <a href="{{url('/details-project',['id'=>$item_post->id])}}">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                        @if(!$item_post->contribute == null)
                                        @if($amount/$item_post->contribute * 100 >= 100)
                                        <div class="causes-one__active">
                                            <span>{{__('Đã Hoàn Thành')}}</span>
                                        </div>
                                            @else
                                            <div class="causes-one__inactive">
                                                <span>{{__('Đang Vận Động')}}</span>
                                            </div>
                                        @endif
                                        @else
                                            <div class="causes-one__inactive">
                                            <span>{{__('Đang Vận Động')}}</span>
                                        </div>
                                    @endif

                                    </div>
                                    <div class="causes-one__content">
                                        <h3 class="causes-one__title">
                                            <a href="{{url('/details-project',['id'=>$item_post->id])}}">{{__($item_post->title)}}</a>
                                        </h3>
                                        <span class="causes-one__text">
                                            {!!__($item_post->description)!!}
                                        </span>
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
                                                <p>{{__('Huy Động')}}: <span>{{__('Không Giới Hạn')}}</span></p>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p>{{__('Góp Được')}}: <span>@money($amount*22854)</span></p>
                                            </div>
                                        @else
                                            <div class="causes-one__goals">
                                                <p>{{__('Huy Động')}}: <span>@money($item_post->contribute*22854)</span></p>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p>{{__('Góp Được')}}: <span>@money($amount*22854)</span></p>
                                            </div>
                                        @endif

                                        <div class="text-center">
                                            @if(!$item_post->contribute == null)
                                            @if($amount/$item_post->contribute * 100 >= 100)
                                            <a href="{{url('/details-project',['id'=>$item_post->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fas fa-arrow-circle-right me-2"></i>{{__('Xem Chi Tiết')}}</a>
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
    <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url('http://image.vietnamnews.vn/uploadvnnews/Article/2018/10/18/19_zing5553151PM.jpg')"></div>
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
    <div class="testimonial-one-bg" style="background-image: url('https://mocah.org/thumbs/5339194-kids-child-children-group-smiling-friends-vietnamese-poor-child-kid-vietnam-traveling-vietnam-poor-person-happiness-eyes-happiness-eyes-of-child-eye-street-life-photography-real-person-traveli.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">{{__('Thư Viện Ảnh')}}</span>
                        <h2 class="section-title__title">{{__('Viết Gì Ở Đây Được?')}}</h2>
                    </div>
                </div>
            </div>


            <div class="col-xl-8">
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        @foreach($gallery as $item)
                            <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-img">
                                        <a class="image-popup" href="{{$item->image}}">
                                            <div class="gallery-page__single">
                                                <div class="gallery-page__img-box testimonial-one__client-img">
                                                    <img class="img-gallery" src="{{$item->image}}" alt="hello">
                                                    <div class="gallery-page__hover-content-box">
                                                        <h2 class="text-center">{{$item->title}}</h2>
                                                        <p>FPT Aptech</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                            </div>
                        @endforeach
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
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Vietnam_Television_logo_from_2013.svg/663px-Vietnam_Television_logo_from_2013.svg.png" alt="VTV">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/FPT_logo_2010.svg/320px-FPT_logo_2010.svg.png" alt="FPT">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="https://aptech.fpt.edu.vn/wp-content/uploads/2020/11/logo.png" alt="FPT Aptech">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/PNUMA_logo.png/240px-PNUMA_logo.png" alt="">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/UNICEF_Logo.svg/240px-UNICEF_Logo.svg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

@endsection
