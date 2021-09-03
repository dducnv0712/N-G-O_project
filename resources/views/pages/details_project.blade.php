@extends('layout')
@section('page_title',$projects->title)
@section('main')
     <!--Page Header Start-->
     <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{$projects->getImage()}}'); filter: grayscale(100%);background-position: center;background-attachment: fixed"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Chi Tiết Dự Án')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Chi Tiết Dự Án')}}</span></li>
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
                                <img src="{{$projects->getImage()}}" alt="">
{{--                                <div class="causes-details__category">--}}
{{--                                    <span>Medical</span>--}}
{{--                                </div>--}}
                                @if(!$projects->contribute == null)
                                    @if($amount/$projects->contribute * 100 >= 100)
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
                                @if(!$projects->contribute == null)

                                @if($amount/$projects->contribute * 100 >= 100)
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="100%">
                                        <div class="count-text">100%</div>
                                    </div>
                                </div>
                                @else
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{$amount/$projects->contribute * 100}}%">
                                        <div class="count-text">{{round($amount/$projects->contribute * 100)}}%</div>
                                    </div>
                                </div>
                                @endif
                                <div class="causes-details__goals">
                                    <p>Cần Huy Động: <span>@money($projects->contribute*22854)</span></p>
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
                            <h3>{{__($projects->title)}}</h3>
                            <p class="causes-details__text-1">
                                {!!__($projects->content) !!}
                            </p>

                        </div>


                        <div class="causes-details__share">
                            <div class="causes-details__share-btn-box">
                                <a href="{{url('/donate',['id'=>$projects->id])}}" class="causes-details__share-btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now</a>
                            </div>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=336217798195466&autoLogAppEvents=1" nonce="jlgxvfb0"></script>
                            <div class="fb-share-button" data-href="{{asset('/desc-post/'.$projects->id)}}" data-layout="button" data-size="small"><a target="_blank" href="{{asset('/desc-post/'.$projects->id)}}" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
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
                                @if(count($user) > 0 )
                                <img src="{{$projects->auth->profile_photo_url}}" alt="">
                                @else
                                    <img src="https://uploads-ssl.webflow.com/612a3d9cd9c35344a2460d68/612a3e2d901fdaa6c88c6ea0_Charity%20(1).png" alt="">
                                @endif
                            </div>
                            <div class="causes-details__organizer-content">
                                @if(count($user) > 0 )
                                    <h5>Organizer: <span>{{$projects->auth->name}}</span></h5>
                                @else
                                    <h5>Organizer: <span>{{__('Thành Viên')}}</span></h5>
                                @endif
                                <ul class="causes-details__organizer-list list-unstyled">
                                    <li><i class="fas fa-map-marker-alt"></i>FPT Aptech</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Hanoi, Vietnam</li>
                                </ul>
                            </div>
                        </div>
                        <div class="causes-details__donations">
                            <h3 class="causes-details__donations-title">{{__('Các Khoản Đóng Góp Gần Đây')}}</h3>
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

