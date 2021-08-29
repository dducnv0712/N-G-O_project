@extends('layout')
@section('main')
     <!--Page Header Start-->
     <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Causes</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Causes Details</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Causes Details Start-->
    <section class="causes-details">
        <div class="container">

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="causes-details__left-bar">
                        <div class="causes-details__img">
                            <div class="causes-details__img-box">
                                <img src="{{$posts->getImage()}}" alt="">
{{--                                <div class="causes-details__category">--}}
{{--                                    <span>Medical</span>--}}
{{--                                </div>--}}
                                @if(!$posts->contribute == null)
                                    @if($amount/$posts->contribute * 100 >= 100)
                                        <div class="causes-details__active">
                                            <span>Đã Hoàn Thành</span>
                                        </div>
                                    @else
                                        <div class="causes-details__inactive">
                                            <span>Đang Hoạt Động</span>
                                        </div>
                                    @endif
                                @else
                                    <div class="causes-details__inactive">
                                        <span>Đang Hoạt Động</span>
                                    </div>
                                @endif
                            </div>
                            <div class="causes-details__progress">
                                @if(!$posts->contribute == null)

                                @if($amount/$posts->contribute * 100 >= 100)
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="100%">
                                        <div class="count-text">100%</div>
                                    </div>
                                </div>
                                @else
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{$amount/$posts->contribute * 100}}%">
                                        <div class="count-text">{{round($amount/$posts->contribute * 100)}}%</div>
                                    </div>
                                </div>
                                @endif
                                <div class="causes-details__goals">
                                    <p>Cần Huy Động: <span>@money($posts->contribute*22854)</span></p>
                                </div>
                                <div class="causes-details__goals">
                                    <p>Đã Góp Được: <span>@money($amount*22854)</span></p>
                                </div>
                            @else
                            <div class="causes-details__goals">
                                <p>Cần Huy Động:<span>Không Giới Hạn</span></p>
                            </div>
                            <div class="causes-details__goals">
                                <p>Đã Góp Được:<span>@money($amount*22854)</span>l</p>
                            </div>

                            @endif

                            </div>
                        </div>
                        <div class="causes-details__text-box">
                            <h3>{{__($posts->title)}}</h3>
                            <p class="causes-details__text-1">
                                {!!__($posts->content) !!}
                            </p>

                        </div>


                        <div class="causes-details__share">
                            <div class="causes-details__share-btn-box">
                                <a href="{{url('/donate',['id'=>$posts->id])}}" class="causes-details__share-btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now</a>
                            </div>

                            <div class="causes-details__share-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="causes-details__right">
                        <div class="causes-details__organizer">
                            <div class="causes-details__organizer-img">
                                <img src="{{$posts->auth->profile_photo_url}}" alt="">
                            </div>
                            <div class="causes-details__organizer-content">
                                <p>{{$posts->created_at->format('F d, Y')}}</p>
                                <h5>Organizer: <span>{{$posts->auth->name}}</span></h5>
                                <ul class="causes-details__organizer-list list-unstyled">
                                    <li><i class="fas fa-map-marker-alt"></i>Education</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Wrightwood, Canada</li>
                                </ul>
                            </div>
                        </div>
                        <div class="causes-details__donations">
                            <h3 class="causes-details__donations-title">Recent Donations</h3>
                            <ul class="list-unstyled causes-details__donations-list">
                                @foreach($contribution_list as $item)
                                   <li>
                                    <div class="causes-details__donations-img">
                                        <img src="https://st.quantrimang.com/photos/image/072015/22/avatar.jpg" alt="">
                                    </div>
                                    <div class="causes-details__donations-content">
                                        <h4>@money($item->contribute_amount * 22854)</h4>
                                        <h5>{{$item->full_name}}</h5>
                                        <p>{{$item->created_at->diffForHumans()}}</p>

                                    </div>
                                </li>
                                @endforeach



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

