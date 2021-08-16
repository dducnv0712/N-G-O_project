@extends('layout')
@section('main')
    <div class="hero-wrap" style="background-image:url('{{ url('dist/user/images/bg_6.jpg')}}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{assert('/')}}">Home</a></span> <span>Donate</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section bg-light">
        <div class="container">
            <form method="post">
{{--                <div class="card mb-3">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="container-sm">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <input type="radio" class="btn-check" name="options-outlined" id="20" autocomplete="off">--}}
{{--                                    <label class="btn btn-outline-danger" for="20">20$</label></div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <input type="radio" class="btn-check" name="options-outlined" id="50" autocomplete="off">--}}
{{--                                    <label class="btn btn-outline-danger" for="50">50$</label></div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <input type="radio" class="btn-check" name="options-outlined" id="100" autocomplete="off">--}}
{{--                                    <label class="btn btn-outline-danger" for="100">100$</label></div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <input type="radio" class="btn-check" name="options-outlined" id="100" autocomplete="off">--}}
{{--                                    <label class="btn btn-outline-danger" for="100">100$</label></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                <div class="row">
                    <div class="col-md-8">

                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <form action="{{url('/debit-cart')}}" class="g-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputPassword4" required>
                                        </div>

                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="" required>
                                    </div>

                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Contribute</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                                    </div>
                                        <div class="col-12">
                                            <label for="select_contribute" class="form-label">Contribute</label>
                                            <select id="select_contribute" class="form-control">
                                                @foreach($category as $item)
                                                    <option disabled>-----{{$item->name}}-----</option>
                                                    @foreach($posts as $select_post)
                                                        @if($select_post -> category_id == $item->id)
                                                            <option value="{{$select_post->id}}">{{$select_post->title}}</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="mt-3" id="paypal-button-container"></div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body"></div>
                        </div>
                    </div>

                </div>
            </form>

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
