@extends('layout')
@section('main')
    <div class="hero-wrap" style="background-image: url('{{url('dist/user/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$posts->title}}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            @php
                $amount = 0;

                 foreach ($contribution as $item_contribution ){
                     if($item_contribution->id_post == $posts->id)
                     $amount += $item_contribution->contribute_amount;
                     }
            @endphp
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
    </section>
@endsection

