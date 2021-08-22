@extends('layout')
@section('main')
    <div class="hero-wrap" style="background-image: url('{{url('dist/user/images/bg_7.jpg')}}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="mb-5 fs-4 text-white" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        {{__('"Chúng tôi cùng với bạn, trên hành trình kiếm tìm hạnh phúc,bằng cách lan tỏa lòng nhân ái, chuyển hóa khổ đau"')}}
{{--                        {{__('hello')}}--}}
                    </p>

{{--                    "Chúng tôi cùng với bạn, trên hành trình kiếm tìm hạnh phúc,bằng cách lan tỏa lòng nhân ái, chuyển hóa khổ đau"--}}
                    <p> <a class="btn btn-white btn-outline-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{__('Đăng Ký Tình Nguyện Viên')}}</a></p>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
          <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>{{__('Chúng Tôi Đã Giúp Đỡ Cho')}}</span>
                            <strong class="number" data-number="{{count($count_contribute)}}">0</strong><span>{{__('Trường Hợp')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">{{__('Với Số Tiền')}}</h3>
                            <div class="d-flex">
                                <strong class="number_2" data-number="{{$amount_total}}">0</strong><span>VND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
                 <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">{{__('Đóng Góp Quỹ')}}</h3>
                            <p>{{__('Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">{{__('Trở Thành Tình Nguyên Viên')}}</h3>
                            <p>{{__('Chúng tôi mong muốn tìm kiếm những bạn tình nguyện viên nhiệt tình, năng động, có trách nhiệm sẵn sàng cống hiến sức mình nhằm đem lại những giá trị thiết thực cho xã hội.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">{{__('Trở Thành Nhà Tài Trợ')}}</h3>
                            <p>{{__('Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.')}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@if($important > 0)
    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    {!! __('<h2 class="mb-4">Dự Án Quan Trọng</h2>') !!}

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        @foreach($posts as $item)
                            @if($item -> important == 0)
                                @php
                                    $amount = 0;

                                     foreach ($contribution as $item_contribution ){
                                         if($item_contribution->id_post == $item->id)
                                         $amount += $item_contribution->contribute_amount;
                                         }
                                @endphp
                                <div class="item">
                                    <div class="cause-entry pb-3">
                                        <a href="#" class="img" style="background-image: url('{{$item -> getImage()}}')"></a>
                                        <div class="text p-3 p-md-4">
                                            <h3 class="title"><a href="{{url('/desc-post',['id'=>$item->id])}}">{{__($item -> title)}}</a></h3>
                                             <span class="desc p-2">{!!__($item->description)!!}</span>
                                            <div class="mt-2">
                                                @if(!$item->contribute == null)
                                                    @if($amount/$item->contribute * 100 >= 100)
                                                        <div style="height:15px;" class="progress custom-progress-success">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{__('Hoàn Thành')}}</div>
                                                        </div>
                                                    @else
                                                        <div style="height:15px;" class="progress custom-progress-success">
                                                            <div class="progress-bar text-center bg-primary" role="progressbar" style="width: {{$amount/$item->contribute * 100}}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{round($amount/$item->contribute * 100)}}%</div>
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>

                                            <p class="mt-2">
                                                @if($item->contribute == null)
                                                    <strong>Không Giới Hạn Đóng Góp</strong><br/>
                                                    <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                                @else
                                                    <strong>Cần Huy Động: @money($item->contribute*22854)</strong><br/>
                                                    <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                                @endif
                                            </p>


                                        </div>
                                        <div class="text-center">
                                            @if(!$item->contribute == null)
                                                @if($amount/$item->contribute * 100 >= 100)
                                                    <button onclick="window.document.location.href='{{url('/desc-post',['id'=>$item->id])}}'" class="btn btn-primary p-0 btn-sm">{{__('Xem Chi Tiết')}}</button>
                                                @else
                                                    <button onclick="window.document.location.href='{{url('/donate',['id'=>$item->id])}}'" class="btn btn-primary p-0 btn-sm">{{__('Đóng Góp')}}</button>
                                                @endif
                                            @else
                                                <button  onclick="window.document.location.href='{{url('/donate',['id'=>$item->id])}}'" class="btn btn-primary p-0 btn-sm">{{__('Đóng Góp')}}</button>
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

@foreach($category as $item)
        @if($item->post_count > 0)
            <section class="ftco-section pb-0 ">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-md-7 heading-section ftco-animate text-center">
                            <h2 class="mb-4">{{__('Các Dự Án'.' '.$item->name)}}</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row d-flex">
                        @foreach($posts as $item_post)

                            @if($item_post->category_id == $item -> id && $item_post->important == 1)
                                @php
                                    $amount = 0;

                                     foreach ($contribution as $item_con ){
                                         if($item_con->id_post == $item_post->id)
                                         $amount += $item_con->contribute_amount;
                                         }
                                @endphp
                                <div class="col-md-4 mt-3 d-flex ftco-animate">
                                    <div class="blog-entry align-self-stretch pb-3">
                                        <a href="" class="block-20" style="background-image:url('{{$item_post->getImage()}}')">
                                        </a>
                                        <div class="text p-4 d-block">
                                            <div class="meta mb-3">
                                                <div><a href="#">{{$item_post->created_at->format('d-m-Y')}}</a></div>
                                            </div>
                                            <h3 class="heading title mt-3"><a href="{{url('/desc-post',['id'=>$item_post->id])}}">{{__($item_post->title)}}</a></h3>
                                            <span class="desc_ mb-1 p-2">
                                                       {!!__($item_post->description)!!}
                                            </span>
                                            <div class="mt-2">
                                                @if(!$item_post->contribute == null)
                                                    @if($amount/$item_post->contribute * 100 >= 100)
                                                        <div class="progress custom-progress-success">
                                                            <div class="progress-bar text-center bg-success" role="progressbar" style="width: 100%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{__('Hoàn Thành')}}</div>
                                                        </div>
                                                    @else
                                                        <div class="progress custom-progress-success">
                                                            <div class="progress-bar text-center bg-primary" role="progressbar" style="width: {{$amount/$item_post->contribute * 100}}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{round($amount/$item_post->contribute * 100)}}%</div>
                                                        </div>
                                                    @endif

                                                @endif
                                            </div>

                                            <p class="mt-2">
                                                @if($item_post->contribute == null)
                                                    <strong>Không Giới Hạn Đóng Góp</strong><br/>
                                                    <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                                @else
                                                    <strong>Cần Huy Động: @money($item_post->contribute*22854)</strong><br/>
                                                    <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                                @endif
                                            </p>

                                        </div>
                                        <div class="text-center">
                                            @if(!$item_post->contribute == null)
                                                @if($amount/$item_post->contribute * 100 >= 100)
                                                <a href='{{url('/desc-post',['id'=>$item_post->id])}}' class="btn btn-primary btn-sm">{{__('Xem Chi Tiết')}}</a>
                                                @else
                                                    <a href='{{url('/donate',['id'=>$item_post->id])}}' class="btn btn-primary btn-sm ">{{__('Đóng Góp')}}</a>
                                                @endif
                                            @else
                                                <a href='{{url('/donate',['id'=>$item_post->id])}}' class="btn btn-primary btn-sm">{{__('Đóng Góp')}}</a>
                                            @endif

                                        </div>

                                    </div>
                                </div>

                            @endif
                        @endforeach
                        <div>
                            <hr>
                            <a href="{{url('/posts-list',['id'=>$item->id])}}">{{__('Xem Thêm Về Dự Án '.$item->name)}}...</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
@endforeach
    <section class="ftco-gallery mt-5">
        <div class="d-md-flex">
            <a href="{{url('dist/user/images/cause-2.jpg')}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('{{url('dist/user/images/cause-2.jpg')}}')">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{url('dist/user/images/cause-3.jpg')}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('{{url('dist/user/images/cause-3.jpg')}}')">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{url('dist/user/images/cause-4.jpg')}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('{{url('dist/user/images/cause-4.jpg')}}')">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="{{url('dist/user/images/cause-4.jpg')}}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('{{url('dist/user/images/cause-5.jpg')}}')">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
        </div>
    </section>




    <section class="ftco-section-3 img" style="background-image: url('{{url('dist/user/images/bg_3.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url('{{url('dist/user/images/bg_4.jpg')}}')"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">{{__('Join Our Mailing List')}}</h3>
                    <form class="volunter-form">
                        @csrf
                        <p class="text-white">{{__('Join and receive updates on charity news by entering the information below.')}}</p>
                        <div class="form-group">

                                <label for="fullName"></label>
                                <input type="text" id="fullName" name="name" class="form-control nameSub" placeholder="{{__('Tên Của Bạn')}}">

                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" id="email" name="email" class="form-control emailSub" placeholder="{{__('Email Của Bạn')}}">
                        </div>

                        <div class="form-group">
                            <button type="button" id="send-mail" class="btn btn-white">{{__('Đăng Ký')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
