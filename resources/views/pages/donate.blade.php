@extends('layout')
@section('page_title',__('Đóng Góp'))
@section('main')
       <!--Page Header Start-->
       <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{asset('/dist/img/photos/nu-cuoi-am-crop.jpg')}}');background-position:bottom"></div>
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
                <span class="section-title__tagline">{{__('Đóng Góp')}}</span>
                <h2 class="section-title__title">{!! __('Hãy chung tay cùng chúng tôi vì <br> một cuộc sống và tương lai tốt đẹp hơn') !!}</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="helping-one__left">
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        {{__('Visa Debit Card')}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><span>{{__('Tên tài khoản')}}</span>: {{__('Tổ Chức Phi Chính Phủ')}}</p><br/>
                                        <p><span>{{__('Số tài khoản')}}</span>: 2516531165325256</p><br/>
                                        <p><span>{{__('Ngân hàng')}}</span>: Ngan Hang AAA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{__('Mastercard Office')}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><span>{{__('Tên tài khoản')}}</span>: {{__('Tổ Chức Phi Chính Phủ')}}</p><br/>
                                        <p><span>{{__('Số tài khoản')}}</span>: 4242455545545554</p><br/>
                                        <p><span>{{__('Ngân hàng')}}</span>: Ngan Hang BBB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="helping-one__left-img">
                            <img src="https://minhhagroup.com/wp-content/uploads/2017/11/1.jpg" alt="">
                            <div class="helping-one__left-icon-box">
                                <span class="icon-heart"></span>
                            </div>
                        </div></div>
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
