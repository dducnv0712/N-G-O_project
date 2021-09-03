@extends('layout')
@section('page_title')
    @if(!$search == null)
       {{__('Kết Quả Tìm Kiếm Cho')}} "{{$search ?? '' ?? ''}}"
    @elseif(!$category == null)
        {{__('Dự Án').' '.$category->name}}
    @else
        {{__('Tất Cả Dự Án')}}
    @endif
@endsection
@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url('{{asset('/dist/img/photos/nu-cuoi-am-about.jpg')}}');background-position:bottom"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            @if(!$search == null)
                <h2>{{__('Khoảng').' '.count($projects).' '.__('Kết Quả Tìm Kiếm Cho')}}:<br>"<span class="text-danger text-center">{{$search ?? '' ?? ''}}</span>"</h2>
            @elseif(!$category == null)
                <h2>{{__('Dự Án').' '.$category->name}}</h2>
                @else
                <h2>{{__('Dự Án')}}</h2>
            @endif
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li>
                    <span>
                        @if(!$search  == null)
                            {{__('Kết Quả Tìm Kiếm').' "'.$search.'"'}}
                            @elseif(!$category == null)
                            {{__('Dự Án'.' '.$category->name)}}
                            @else
                            {{__('Dự Án')}}
                        @endif
                    </span>
                </li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Causes One Start-->
    <section class="causes-one causes-page">
        <div class="container">
            <div class="row">
                @foreach($projects as $item)
                    @php
                        $amount = 0;

                         foreach ($contribution as $item_con ){
                             if($item_con->id_post == $item->id)
                             $amount += $item_con->contribute_amount;
                             }
                    @endphp
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Causes Page Single-->
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img style="max-height: 230px;" src="{{$item->getImage()}}" alt="">
                                    <a href="{{url('/details-project',['id'=>$item->id])}}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                @if(!$item->contribute == null)
                                    @if($amount/$item->contribute * 100 >= 100)
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
                                            <a href="{{url('/details-project',['id'=>$item->id])}}">{{__($item->title)}}</a>
                                        </h3>
                                          <span class="causes-one__text">{!!__($item->description)!!}</span>
                                    </div>
                                    <div class="causes-one__progress">
                                        @if(!$item->contribute == null)
                                            @if($amount/$item->contribute * 100 >= 100)
                                            @else
                                                <div class="bar">
                                                    <div class="bar-inner count-bar" data-percent="{{$amount/$item->contribute * 100}}%">
                                                        <div class="count-text">{{round($amount/$item->contribute * 100)}}%</div>
                                                    </div>
                                                </div>
                                            @endif

                                        @endif

                                        @if($item->contribute == null)
                                            <div class="causes-one__goals">

                                                <p>{{__('Huy Động')}}: <span>{{__('Không Giới Hạn')}}</span></p>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p>{{__('Góp Được')}}: <span>@money($amount*22854)</span></p>
                                            </div>
                                        @else
                                            <div class="causes-one__goals">
                                                <p>Huy Dong: <span>@money($item->contribute*22854)</span></p>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p>Góp Duoc: <span>@money($amount*22854)</span></p>
                                            </div>
                                        @endif

                                        <div class="text-center">
                                            @if(!$item->contribute == null)
                                                @if($amount/$item->contribute * 100 >= 100)
                                                    <a href="{{url('/details-project',['id'=>$item->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fas fa-arrow-circle-right me-2"></i>{{__('Xem Chi Tiết')}}</a>
                                                @else
                                                    <a href="{{url('/donate',['id'=>$item->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fa fa-heart me-2"></i>{{__('Đóng Góp')}}</a>
                                                @endif
                                            @else
                                                <a href="{{url('/donate',['id'=>$item->id])}}" class="ms-0 causes-one__donate-btn mt-3"><i class="fa fa-heart me-2"></i>{{__('Đóng Góp')}}</a>
                                            @endif
                                         </div>
                                    </div>

                    </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>


@endsection
