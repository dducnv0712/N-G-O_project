@extends('layout')
@section('main')
       <!--Page Header Start-->
       <section class="page-header">
        <div class="page-header__bg" style="background-image: url(dist/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>Causes</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>Causes</span></li>
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
                            <img src="assets/images/resources/helping-one-left-img.jpg" alt="">
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
                                                <input type="number" min="0" id="amount" name="amount" placeholder="Enter Donation Amount">
                                                <div class="helping-one__right-dolar-icon">
                                                    <h6 style="color:#707876" id="currency">₫</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-lg-12">
                                    <select class="become-volunteer-page__select" id="select_post">
                                        <option  @if($post_selected == null) selected @endif disabled>Chọn Đối Trường Hợp Muốn Đóng Góp</option>
                                        @foreach($category as $item)
                                            @if($item->post_count > 0)
                                                <option disabled>-----{{'Các dự án '.$item->name}}-----</option>
                                                @foreach($posts as $select_post)
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
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mt-3" id="paypal-button-container"></div>
                                </div>
                               <div class="text-center" id="loading">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
