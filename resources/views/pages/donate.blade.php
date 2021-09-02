@extends('layout')
@section('main')
       <!--Page Header Start-->
       <section class="page-header">
        <div class="page-header__bg" style="background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fminhhagroup.com%2F2017%2F11%2F25%2Fchung-tay-giup-do-tre-em-vung-cao%2F&psig=AOvVaw30GOPwJuUmJzWprteEK-mw&ust=1630053224555000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKC669GjzvICFQAAAAAdAAAAABBI');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Đóng Góp')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Đóng Góp')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Helping One Start-->
    <section class="helping-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Latest Causes</span>
                <h2 class="section-title__title">Find the popular cause <br> and donate them</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="helping-one__left">
                        <h3 class="helping-one__title">We’re Helping Today. Helping Tommorow</h3>
                        <p class="helping-one__text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words even slightly believable. All the Lorem Ipsum generators on the Internet tend.</p>
                        <ul class="helping-one__left-list list-unstyled">
                            <li>
                                <div class="helping-one__left-icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="helping-one__left-text">
                                    <p>Making this the first true generator on the Internet</p>
                                </div>
                            </li>
                            <li>
                                <div class="helping-one__left-icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="helping-one__left-text">
                                    <p>Lorem Ipsum is not simply random text</p>
                                </div>
                            </li>
                            <li>
                                <div class="helping-one__left-icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div class="helping-one__left-text">
                                    <p>If you are going to use a passage</p>
                                </div>
                            </li>
                        </ul>
                        <div class="helping-one__left-img">
                            <img src="https://minhhagroup.com/wp-content/uploads/2017/11/1.jpg" alt="">
                            <div class="helping-one__left-icon-box">
                                <span class="icon-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="helping-one__right">
                        <form  class="helping-one__right-form">
                            <div class="row">
                                <div class="text-center mb-3" id="loading">
                                </div>
                                <div class="col-lg-12">

                                    <div class="row">
                                        <div class="col-4">
                                            <select class="become-volunteer-page__select" name="con" id="cur">
                                            <option selected class="selected" value="VND">VND</option>
                                            <option value="INR">INR</option>
                                            <option value="USD">USD</option>
                                        </select>
                                        </div>
                                        <div class="col-8">
                                            <div class="helping-one__right-input-box">
                                                <input type="number" min="0" id="amount" name="amount" placeholder="{{__('Số Tiền Đóng Góp')}}">
                                                <div class="helping-one__right-dolar-icon">
                                                    <h6 style="color:#707876" id="currency">₫</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="fullName" placeholder="Your Name" value="@if(!Auth::user() == null) {{Auth::user()->name}} @endif">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" id="email_donate" placeholder="Email Address" value="@if(!Auth::user() == null) {{Auth::user()->email}} @endif">
                                </div>
                                <div class="col-lg-12">
                                    <select class="become-volunteer-page__select" id="select_post">
                                        <option  @if($post_selected == null) selected @endif disabled>Chọn Đối Trường Hợp Muốn Đóng Góp</option>
                                        @foreach($category as $item)
                                            @if($item->project_count > 0)
                                                <option disabled>-----{{'Các dự án '.$item->name}}-----</option>
                                                @foreach($projects as $select_post)
                                                         @if($select_post -> category_id == $item->id)
                                                             @if(!$post_selected == null)
                                                                 <option class="text-dark"  @if($post_selected->id ==$select_post->id ) selected @endif value="{{$select_post->id}}">{{$select_post->title}}</option>
                                                             @else
                                                                 <option class="text-dark" value="{{$select_post->id}}">{{$select_post->title}}</option>
                                                             @endif
                                                         @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                </select>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" id="message-donate" placeholder="{{__('Lời Nhắn')}}"></textarea>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mt-3" id="paypal-button-container"></div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
