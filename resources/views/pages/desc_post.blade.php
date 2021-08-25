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
                        <div class="causes-details__images-box">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="causes-details__images-single">
                                        <img src="assets/images/resources/causes-details-images-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="causes-details__images-single">
                                        <img src="assets/images/resources/causes-details-images-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="causes-details__summary">
                            <div class="causes-details__summary-text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going
                                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing. </p>
                            </div>
                            <div class="causes-details__summary-list">
                                <ul class="causes-details__summary-list-box list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Making this first true generator</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Many desktop publish packages</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="text">
                                            <p>Lorem Ipsum is not simply</p>
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
                            </div>
                        </div>
                        <div class="causes-details__share">
                            <div class="causes-details__share-btn-box">
                                <a href="#" class="causes-details__share-btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now</a>
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
                                <p>Created 20 Jan, 2021</p>
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
                                        <h5>{{$item->given_name.' '.$item->surname}}</h5>
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

    <!--Causes Details End-->


    {{-- <section class="ftco-section ftco-degree-bg">
        <div class="container">

            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3 text-center">{{$posts->title}}</h2>
                    <p>
                        {!! $posts ->content !!}

                    </p>
                    <div class="about-author d-flex p-5 bg-light">
                        <div class="bio image_desc align-self-md-center mr-5">
                            <img  src="{{$posts->getImage()}}" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc align-self-md-center">
                            <h3>{{$posts->title}}</h3>
                            @if(!$posts->contribute == null)
                                <strong>Cần Huy Động: @money($posts->contribute*22854)</strong><br/>
                                <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                @if($amount/$posts->contribute * 100 >= 100)
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar text-center bg-success" role="progressbar" style="width: 100%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{__('Hoàn Thành')}}</div>
                                    </div>
                                @else
                                    <div class="progress custom-progress-success">
                                        <div class="progress-bar text-center bg-primary" role="progressbar" style="width: {{$amount/$item_post->contribute * 100}}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{round($amount/$posts->contribute * 100)}}%</div>
                                    </div>
                                @endif
                            @else
                                <strong>Không Giới Hạn Đóng Góp</strong><br/>
                                <strong>Đã Góp Được: @money($amount*22854)</strong><br/>

                            @endif
                            <a href="{{url('/donate',['id'=>$posts->id])}}" class="btn btn-sm btn-primary mt-3 pt-1 pb-1 ps-2 pe-2">Donate</a>
                        </div>
                    </div>



                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            <ul>
                                @foreach($category as $item)
                                <li><a href="{{url('/posts-list',['id'=>$item->id])}}">{{$item->name}}<span>@if(!$item->post_count == 0)({{$item->post_count}})@else(0)@endif</span></a></li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        @foreach($post_list as $item)
                            @if($item->category_id == $posts->category_id)

                                <div class="block-21 mb-4 d-flex">
                                    <a class="blog-img mr-4" style="background-image: url('{{url($item->image)}}');"></a>
                                    <div class="text">
                                        <h3 class="heading"><a class="title" href="{{url('/desc-post',['id'=>$item->id])}}">{{$item->title}}</a></h3>
                                        <div class="meta">
                                            <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Shares</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Facebook</a>
                            <a href="#" class="tag-cloud-link">Tweeter</a>
                            <a href="#" class="tag-cloud-link">Linkin</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section> --}}
@endsection

