@extends('layout')
@section('main')

    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">{{translateText('Home')}}</a></span> <span>{{translateText('About ')}}</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{translateText('About Us')}}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch" style="background-image: url(images/bg_3.jpg); width: 100%;"></div>
                </div>
                {!! translateText('    <div class="col-md-6 pl-md-5 ftco-animate">

                <h2 class="mb-4">Welcome to Welfare Stablished Since 1898</h2>
                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>') !!}

            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            {!! translateText('
                            <span>Chúng Tôi Đã Giúp Đỡ Cho</span>
                            <strong class="number" data-number="400">0</strong><span>Trường Hợp</span>')
                             !!}
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        {!! translateText('<div class="text">
                            <h3 class="mb-4">Với Số Tiền</h3>
                            <div class="d-flex">
                                <strong class="number_2" data-number="160000000">0</strong><span>VND</span>
                            </div>
                        </div>')!!}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">{{translateText('Team Members')}}</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">{{translateText('Nguyen Hong Quang')}}</a></h3>

                                <div class="text">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">{{translateText('Nguyen Van Duc')}}</a></h3>

                                <div class="text">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">{{translateText('Ngo Viet Hoang')}}</a></h3>
{{--                                <span class="position">Donated Just now</span>--}}
                                <div class="text">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

