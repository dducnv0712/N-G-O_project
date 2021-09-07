@extends('layout')
@section('page_title',__('Giới Thiệu'))

@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url('{{asset('/dist/img/photos/nu-cuoi-am-about.jpg')}}');background-position:bottom"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Giới Thiệu')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
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
                            <div style="bottom:5px" class="about-page__trusted">
                                <h3>We’re trusted by <span>9,8750</span> donors</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">{{__('Về Chúng Tôi')}}</span>
                            <h2 class="section-title__title">{{__('Chúng tôi tin rằng chúng tôi có thể giúp đỡ được nhiều người hơn')}}</h2>
                        </div>
                        <p class="about-page__right-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec efficitur mauris. Sed eu elit in nulla facilisis semper et quis eros. Proin eu orci id odio condimentum pretium. Nunc vitae semper arcu. Nam condimentum finibus augue eget aliquam. Curabitur rutrum pulvinar libero, vitae laoreet ex fringilla non. Donec lacinia turpis vel ultrices malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec quis felis augue. Integer vel ante feugiat, luctus tellus in, lobortis lorem. Ut tincidunt consectetur massa, eu porta mauris facilisis sit amet. Praesent eleifend, dolor non lacinia venenatis, nulla magna elementum eros, at volutpat erat enim pulvinar sapien.</p>
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        {{__('Sứ Mệnh Của Chúng Tôi')}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec efficitur mauris. Sed eu elit in nulla facilisis semper et quis eros. Proin eu orci id odio condimentum pretium. Nunc vitae semper arcu. Nam condimentum finibus augue eget aliquam. Curabitur rutrum pulvinar libero, vitae laoreet ex fringilla non. Donec lacinia turpis vel ultrices malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec quis felis augue. Integer vel ante feugiat,</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{__('Tầm nhìn')}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec efficitur mauris. Sed eu elit in nulla facilisis semper et quis eros. Proin eu orci id odio condimentum pretium. Nunc vitae semper arcu. Nam condimentum finibus augue eget aliquam. Curabitur rutrum pulvinar libero, vitae laoreet ex fringilla non. Donec lacinia turpis vel ultrices malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec quis felis augue. Integer vel ante feugiat,</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{__('Giá trị cốt lõi')}}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec efficitur mauris. Sed eu elit in nulla facilisis semper et quis eros. Proin eu orci id odio condimentum pretium. Nunc vitae semper arcu. Nam condimentum finibus augue eget aliquam. Curabitur rutrum pulvinar libero, vitae laoreet ex fringilla non. Donec lacinia turpis vel ultrices malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec quis felis augue. Integer vel ante feugiat,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <h3 class="about-page__right-title">Halpes is the largest global crowdfunding community in--}}
{{--                            the world</h3>--}}
{{--                        <div class="about-five__progress-wrap">--}}

{{--                            <div class="about-five__progress">--}}
{{--                                <div class="about-five__progress-box">--}}
{{--                                    <div class="circle-progress"--}}
{{--                                         data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#e5eeec","lineCap": "square", "size": 138, "fill": { "color": "#15c8a0" } }'>--}}
{{--                                    </div><!-- /.circle-progress -->--}}
{{--                                    <span>90%</span>--}}
{{--                                </div>--}}
{{--                                <div class="about-five__progress-content">--}}
{{--                                    <h3>Successful causes</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="about-five__progress">--}}
{{--                                <div class="about-five__progress-box">--}}
{{--                                    <div class="circle-progress"--}}
{{--                                         data-options='{ "value": 0.5,"thickness": 3,"emptyFill": "#e5eeec","lineCap": "square", "size": 138, "fill": { "color": "#15c8a0" } }'>--}}
{{--                                    </div><!-- /.circle-progress -->--}}
{{--                                    <span>50%</span>--}}
{{--                                </div><!-- /.about-five__progress-box -->--}}
{{--                                <div class="about-five__progress-content">--}}
{{--                                    <h3>Amazing donors</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Page Start-->



    <!--Join One Start-->
    <section class="join-one">
        <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url('http://image.vietnamnews.vn/uploadvnnews/Article/2018/10/18/19_zing5553151PM.jpg')"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="join-one__inner">
                        <h2 class="join-one__title">{!! __('Tham gia cộng đồng và cùng <br>thực hiện các sứ mệnh với chúng tôi') !!}</h2>
                        <a href="{{url('/become-a-volunteer')}}" class="join-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>{{__('Trở Thành Tình Nguyện Viên')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Join One End-->

    <!--Counters One Start-->
    <section class="counters-one about-page-counter">
        <div class="container">
            <ul  class="counters-one__box list-unstyled">
                <li class="counter-one__single">
                    <h3 class="odometer" data-count="{{$amount_total}}">00</h3><span class="counter-one__letter">VND</span>
                    <p class="counter-one__text">{{__('Tổng Số Tiền Quyên Góp')}}</p>
                </li>
                <li class="counter-one__single">
                    <h3 class="odometer" data-count="{{count($count_contribute)}}">00</h3>
                    <p class="counter-one__text">{{__('Dự Án Hoàn Thành')}}</p>
                </li>

                <li class="counter-one__single">
                    <h3 class="odometer" data-count="{{count($volunteer)}}">00</h3><span class="counter-one__letter">+</span>
                    <p class="counter-one__text">{{__('Tình Nguyện Viên')}}</p>
                </li>
            </ul>
        </div>
    </section>
    <!--Counters One Start-->

    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">{{__('Tình Nguyện Viên Có Vai Trò Quan Trọng')}}</span>
                <h2 class="section-title__title">{!!__('Họ Là Những Người <br> Có Đóng Góp Lớn Cho Cộng Đồng Và Tổ Chức')!!}</h2>
            </div>
            <div class="row">
                @foreach($volunteer as $item)
                    @if($item->important == 0)
                        <div class="col-xl-4 col-lg-4">
                            <!--Team One Single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img text-center">
                                        <img  src="{{$item->image}}" alt="{{$item->name}}">
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="text-center team-one__member-name mb-3 ">
                                        <h4 class="team-one__member-sub">{{$item->office}}</h4>
                                        <h2 class="font-weight-bold fw-bold">{{$item->name}}</h2>
                                    </div>

{{--                                    <h5><span>{{__('Tuổi')}}: </span>{{\Carbon\Carbon::parse($item->birthday)->diff(\Carbon\Carbon::now())->y}}</h5>--}}
{{--                                    <h5><span>{{__('Giáo Dục')}}: </span>{{$item->education}}</h5>--}}
                                </div>
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-facebook-square"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-dribbble"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    @endif
                @endforeach
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

