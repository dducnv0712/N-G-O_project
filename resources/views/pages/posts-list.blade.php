@extends('layout')
@section('main')

    <div class="hero-wrap" style="background-image:  url('{{url('dist/user/images/bg_7.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">{{__('Home')}}</a></span> <span>{{__('Contact')}}</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{__('Dự Án '.$category->name)}}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach($posts as $item)
                    @php
                        $amount = 0;

                         foreach ($contribution as $item_contribution ){
                             if($item_contribution->id_post == $item->id)
                             $amount += $item_contribution->contribute_amount;
                             }
                    @endphp
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{$item->getImage()}}');">
                            </a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="#">{{__($item->created_at->format('d-m-Y'))}}</a></div>
                                </div>
                                <h3 class="heading mt-3"><a href="{{url('/desc-post',['id'=>$item->id])}}">{{__($item->title)}}</a></h3>
                                <span class="desc_">{!!__($item->description)!!}</span>
                                @if(!$item->contribute == null)
                                    @if($amount/$item->contribute * 100 >= 100)
                                        <div class="progress custom-progress-success">
                                            <div class="progress-bar text-center bg-success" role="progressbar" style="width: 100%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{__('Hoàn Thành')}}</div>
                                        </div>
                                    @else
                                        <div class="progress custom-progress-success">
                                            <div class="progress-bar text-center bg-primary" role="progressbar" style="width: {{$amount/$item->contribute * 100}}%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">{{round($amount/$item->contribute * 100)}}%</div>
                                        </div>
                                    @endif

                                @endif
                                <p class="mt-2">
                                    @if($item->contribute == null)
                                        <strong>Không Giới Hạn Đóng Góp</strong><br/>
                                        <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                    @else
                                        <strong>Cần Huy Động: @money($item_post->contribute*22854)</strong><br/>
                                        <strong>Đã Góp Được: @money($amount*22854)</strong><br/>
                                    @endif
                                </p>

                            </div>
                            <div class="text-center">
                                @if(!$item->contribute == null)
                                    @if($amount/$item->contribute * 100 >= 100)
                                        <a href='{{url('/desc-post',['id'=>$item->id])}}' class="btn btn-primary mb-3 btn-sm">{{__('Xem Chi Tiết')}}</a>
                                    @else
                                        <a href='{{url('/donate',['id'=>$item->id])}}' class="btn btn-primary mb-3 btn-sm ">{{__('Đóng Góp')}}</a>
                                    @endif
                                @else
                                    <a href='{{url('/donate',['id'=>$item->id])}}' class="btn btn-primary mb-3 btn-sm">{{__('Đóng Góp')}}</a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
