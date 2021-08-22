@extends('layout')
@section('main')
    <div class="hero-wrap" style="background-image:url('{{ url('dist/user/images/bg_6.jpg')}}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{asset('/')}}">{{__('Home')}}</a></span> <span>{{__('Profile')}}</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{__('Profile')}}</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section bg-light">
        <div class="container">

            <div class="row">
                <div class="col-3 border-right border-1" >
                    <div class="nav flex-column nav-pills mb-3 mt-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"  role="tab" aria-controls="v-pills-profile" aria-selected="true">{{__('Profile')}}</a>
                        <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"  role="tab" aria-controls="v-pills-messages" aria-selected="false">{{__('Account')}}</a>
                        <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"  role="tab" aria-controls="v-pills-settings" aria-selected="false">{{__('My Contributions')}}</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> <div class="card">

                                <div class="card-body">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card border-0 mb-4">
                                                        <div class="card-body text-center">
                                                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-circle m-auto img-fluid" style="width: 150px;">
                                                            <h5 class="my-3">{{Auth::user()->name}}</h5>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Full Name</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{Auth::user()->name}}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Email</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Created At</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{$user->created_at->format('F').' '.$user->created_at->format('d, Y') }}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Updated At</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{$user->updated_at->format('F').' '.$user->updated_at->format('d, Y') }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                            Update Profile
                                                        </button>

                                                    <div class="collapse mt-3" id="collapseExample">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                                                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                                                        @livewire('profile.update-profile-information-form')
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> <div class="card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                                <div class="mt-10 sm:mt-0 ">
                                                    @livewire('profile.update-password-form')
                                                </div>

                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


                                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                                <div class="mt-10 sm:mt-0">
                                                    @livewire('profile.two-factor-authentication-form')
                                                </div>


                                            @endif


                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

                                            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())


                                                <div class="mt-10 sm:mt-0">
                                                    @livewire('profile.delete-user-form')
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div></div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"> <div class="card">

                                <div class="card-body border-0">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0" style="width:350px" scope="col">Project Name</th>
                                            <th class="border-top-0" scope="col">Contribute Date</th>
                                            <th class="border-top-0" scope="col">Amount</th>
                                            <th class="border-top-0" scope="col">Contribute Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($contribution as $item)
                                            <tr>
                                                <th >{{$item->post->title}}</th>
                                                <td>{{$item->created_at->format('F').' '.$item->created_at->format('d, Y') }}</td>
                                                <td>@money($item->contribute_amount * 22854)</td>
                                                <td>{{$item->status}}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4">Bạn Chưa Đóng Góp Cho Đối Tượng Nào</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div></div>
                    </div>
                </div>
            </div>


{{--            <div class="card"><div class="card-body">        <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}

{{--                        <button class="btn btn-danger" type="submit">Logout</button>--}}
{{--                    </form></div></div>--}}
{{--            <div class="card"></div>--}}
{{--            <div class="card"></div>--}}
{{--            <div class="card"></div>--}}
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
                    <h3 class="mb-3">{{__('Be a volunteer')}}</h3>
                    <form action="#" class="volunter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('Your Name')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('Your Email')}}">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="{{__('Message')}}"></textarea>
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
