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
                @foreach($gallery as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Gallery page Single-->
                        <a class="image-popup" href="{{$item->image}}">
                            <div class="gallery-page__single">
                                <div class="gallery-page__img-box">
                                    <img class="img-gallery" src="{{$item->image}}" alt="hello">
                                    <div class="gallery-page__hover-content-box">
                                        <h2>{{$item->title}}</h2>
                                        <p>FPT Aptech</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--Gallery page End-->


@endsection
