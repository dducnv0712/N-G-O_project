@extends('layout')
@section('page_title',__('Thông Tin Tài Khoản'))

@section('main')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Thông Tin Tài Khoản')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Thông Tin Tài Khoản')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->


    <section class="gallery-page">
        <div class="container">

            <div class="row">
                <div class="col-3 border-right border-1" >
                    <div class="nav flex-column nav-pills mb-3 mt-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link thm-btn active mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"  role="tab" aria-controls="v-pills-profile" aria-selected="true">{{__('Thông Tin Cá Nhân')}}</a>
                        <a class="nav-link thm-btn mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"  role="tab" aria-controls="v-pills-messages" aria-selected="false">{{__('Bảo Mật')}}</a>
                        <a class="nav-link thm-btn mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"  role="tab" aria-controls="v-pills-settings" aria-selected="false">{{__('Đóng Góp Của Tôi')}}</a>
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
                                                            <img src="{{ asset(Auth::user()->profile_photo_url)}}" alt="{{ Auth::user()->name }}" class="rounded-circle m-auto img-fluid" style="width: 150px;">
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
                                                                    <p class="text-muted mb-0">{{$user->created_at->format('F d, Y') }}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Updated At</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{$user->updated_at->format('F d, Y')}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <button class="thm-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                                    <table class="table" id="table-contribute">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0" style="width:150px" scope="col">{{__('Tên Dự Án')}}</th>
                                            <th class="border-top-0" scope="col">{{__('Ngày Đóng Góp')}}</th>
                                            <th class="border-top-0" scope="col">{{__('Số Tiền Đóng Góp')}}</th>
                                            <th class="border-top-0" scope="col">{{__('Trạng Thái Đóng Góp')}}</th>
                                            <th class="border-top-0" scope="col">{{__('Chi Tiết')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($contribution as $item)
                                            <tr>
                                                <th ><div style="max-width:150px;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;">{{$item->project->title}}</div></th>
                                                <td>{{$item->created_at->format('F d, Y')}}</td>
                                                <td>@money($item->contribute_amount * 22854)</td>
                                                <td>{{$item->status}}</td>
                                                <td>
                                                    <div class="text-center">
                                                        <a class="details-contributor" title="{{__('Chi Tiết')}}" data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="details-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body" id="contribute-details">
                                                                    <div class="m-auto mb-4">
                                                                        <img class="m-auto" style="width:200px;height:100px;object-fit:contain" src="{{asset('dist/assets/images/resources/Charity.png')}}" alt="">
                                                                    </div>

                                                                    <div style="background-color:#eff5f4" class="card mt-3">

                                                                        <div  class="card-body ">
                                                                            <h1 class="font-weight-bold text-center">{{__('Chi Tiết Phiếu Đóng Góp')}}</h1>
                                                                            <div class="container mt-5">
                                                                                <div class="d-flex justify-content-center row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="p-3] rounded">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="billed"><span class="font-weight-bold">{{__('Họ và Tên')}}: </span><span class="fw-normal"> {{$item->full_name}}</span></div>
                                                                                                    <div class="billed"><span class="font-weight-bold ">{{__('Ngày Đóng Góp')}}: </span><span class="fw-normal"> {{$item->created_at->toDayDateTimeString()}}</span></div>
                                                                                                    <div class="billed"><span class="font-weight-bold">{{__('Số phiếu thu')}}:</span><span class="fw-normal"> {{$item->contribute_id}}</span></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="mt-3">
                                                                                                <div class="table-responsive">
                                                                                                    <table class="table">
                                                                                                        <thead>
                                                                                                        <tr>
                                                                                                            <th>{{__('Đối Tượng Đóng Góp')}}</th>
                                                                                                            <th>{{__('Số Tiền')}}</th>
                                                                                                        </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td>{{$item->project->title}}</td>
                                                                                                            <td>@money($item->contribute_amount*22854)</td>

                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td class="border-0 mt-4"  colspan="2">{{__('Lời Nhắn: ')}}<span class="fw-normal">{{__($item->messages)}}</span></td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    {{--                                        <button type="button" id="download-pdf" class="btn btn-danger"><i class="fas fa-file-pdf me-2"></i>Download PDF</button>--}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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

@endsection
