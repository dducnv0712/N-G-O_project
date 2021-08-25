@extends('layout')
@section('main')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
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

    <!--Causes One Start-->
    <section class="causes-one causes-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Causes Page Single-->
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <div class="causes-one__img-box">
                                <img src="dist/assets/images/resources/causes-page-img-1.jpg" alt="">
                                <a href="causes-details.html">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="causes-one__inactive">
                                <span>Medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title">
                                <a href="causes-details.html">Raise Fund for Clean & Healthy Water</a>
                            </h3>
                            <p class="causes-one__text">There are not many of passages of lorem ipsum avail isn
                                alteration donationa in form simply free.</p>
                        </div>
                        <div class="causes-one__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="36%">
                                    <div class="count-text">36%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>$25,270</span> Raised</p>
                                <p><span>$30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Causes One End-->

@endsection
