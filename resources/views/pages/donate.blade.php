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
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="container-sm">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="radio" class="btn-check" name="options-outlined" id="20" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="20">20$</label></div>
                                <div class="col-md-2">
                                    <input type="radio" class="btn-check" name="options-outlined" id="50" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="50">50$</label></div>
                                <div class="col-md-2">
                                    <input type="radio" class="btn-check" name="options-outlined" id="100" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="100">100$</label></div>
                                <div class="col-md-6">
                                    <input type="radio" class="btn-check" name="options-outlined" id="100" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="100">100$</label></div>
                                </div>
                            </div>
                        </div>

                    </div>
                <div class="row">
                    <div class="col-md-7">

                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <form class="g-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>


                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="card">

                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">First Name</label>
                                        <input type="date" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>


                                </div>

                            </div>

                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                                <button class="btn btn-primary">Donate</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </section>

    <section class="ftco-section-3 img" style="background-image: url('{{url('dist/user/images/bg_3.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url('{{url('dist/user/images/bg_3.jpg')}}');"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Be a volunteer</h3>
                    <form action="#" class="volunter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
