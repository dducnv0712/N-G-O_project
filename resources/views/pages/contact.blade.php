@extends('layout')
@section('main')

    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">{{translateText('Home')}}</a></span> <span>{{translateText('Contact')}}</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{translateText('Contact Us')}}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">{{translateText('Contact Information')}}</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>{{translateText('Address:')}}</span>{{translateText('198 West 21th Street, Suite 721 New York NY 10016')}} </p>
                </div>
                <div class="col-md-3">
                    <p><span>{{translateText('Phone:')}}</span> <a href="tel://1234567920">{{translateText('+ 1235 2355 98')}}</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>{{translateText('Email:')}}</span> <a href="mailto:info@yoursite.com">{{translateText('info@yoursite.com')}}</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>{{translateText('Website')}}</span> <a href="#">{{translateText('yoursite.com')}}</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">{{translateText('Do you have any questions?')}}</h4>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{translateText('Your Name')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{translateText('Your Email')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{translateText('Subject')}}">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{translateText('Message')}}"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6" id="map"></div>
            </div>
        </div>
    </section>
@endsection
