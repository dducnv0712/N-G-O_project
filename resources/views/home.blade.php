@extends('layout')
@section('main')
    <div class="hero-wrap" style="background-image: url('{{url('dist/user/images/bg_7.jpg')}}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="mb-5 fs-4 text-white" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        "Chúng tôi cùng với bạn, trên hành trình kiếm tìm hạnh phúc,bằng cách lan tỏa lòng nhân ái, chuyển hóa khổ đau"
                    </p>

{{--                    "Chúng tôi cùng với bạn, trên hành trình kiếm tìm hạnh phúc,bằng cách lan tỏa lòng nhân ái, chuyển hóa khổ đau"--}}
                    <p> <a class="btn btn-white btn-outline-white">Donate Now</a></p>
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
                            <span>Chúng Tôi Đã Giúp Đỡ Cho</span>
                            <strong class="number" data-number="400">0</strong><span>Trường Hợp</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Với Số Tiền</h3>
                            <div class="d-flex">
                                <strong class="number_2" data-number="160000000">0</strong><span>VND</span>
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
                            <h3 class="heading">Đóng Góp Quỹ</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Trở Thành Tình Nguyên Viên</h3>
                            <p>Chúng tôi mong muốn tìm kiếm những bạn tình nguyện viên nhiệt tình, năng động, có trách nhiệm sẵn sàng cống hiến sức mình nhằm đem lại những giá trị thiết thực cho xã hội.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Trở Thành Nhà Tài Trợ</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-5 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Dự Án Quan Trọng</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        @foreach($posts as $item)
                            @if($item -> important == 1)
                                <div class="item">
                                    <div class="cause-entry pb-3">
                                        <a href="#" class="img" style="background-image: url('{{$item -> getImage()}}')"></a>
                                        <div class="text p-3 p-md-4">
                                            <h3 class="title"><a href="#">{{$item -> title}}</a></h3>
                                            <p class="desc">{{$item->description}}</p>
                                            <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                            <div class="progress custom-progress-success">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            @if($item->contribute == null)
                                                <span class="fund-raised d-block">Không Giới Hạn Đóng Góp</span>
                                            @else
                                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                                            @endif

                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-primary text-center">Donate</button>

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

    @foreach($category as $item)
        <section class="ftco-section pb-0 ">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">Các Dự Án {{$item->name}}</h2>
                        <hr>
                    </div>
                </div>
                <div class="row d-flex">
                    @foreach($posts as $item_post)

                        @if($item_post->category_id == $item -> id && $item_post->important == 0)
                            <div class="col-md-4 mt-3 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch pb-3">
                                    <a href="" class="block-20" style="background-image:url('{{$item_post->getImage()}}')">
                                    </a>
                                    <div class="text p-4 d-block">
                                        <div class="meta mb-3">
                                            <div><a href="#">{{$item_post->created_at}}</a></div>

                                        </div>
                                        <h3 class="heading title mt-3"><a href="#">{{$item_post->title}}</a></h3>
                                        <p class="desc">{{$item_post -> description}}</p>
                                        @if(!$item_post->contribute == null)
                                        <div class="progress custom-progress-success">
                                            <div class="progress-bar text-center bg-primary" role="progressbar" style="width: {{1500/$item_post->contribute * 100}}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{1500/$item_post->contribute * 100}}%</div>
                                        </div>
                                        @endif
                                        @if($item_post->contribute == null)
                                            <span class="fund-raised d-block mt-2">Không Giới Hạn Đóng Góp</span>
                                        @else
                                            <span class="fund-raised d-block mt-2">$1500.00 raised of ${{$item_post->contribute}}</span>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <button style="width:150px;height:30px" class="btn btn-primary btn-sm">Donate</button>

                                    </div>

                                </div>
                            </div>

                        @endif

                    @endforeach


                    <div>
                        <hr>
                        <a href="#">Xem Thêm Về Dự Án {{$item->name}}...</a>
                    </div>


                </div>
            </div>
        </section>

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
        <div class="d-md-flex">
            <a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('{{url('dist/user/images/cause-6.jpg')}}')">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search"></span>
                </div>
            </a>
            <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
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
                    <h3 class="mb-3">Join Our Mailing List</h3>
                    <form class="volunter-form">
                        @csrf
                        <p class="text-white">Join and receive updates on charity news by entering the information below.</p>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control nameSub" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control emailSub" placeholder="Your Email">
                        </div>

                        <div class="form-group">
                            <button type="button" id="send-mail" class="btn btn-white">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
