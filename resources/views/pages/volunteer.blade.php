@extends('layout')
@section('page_title',__('Tình Nguyện Viên'))

@section('main')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('{{asset('/dist/img/photos/nucuoiam.jpg')}}'); filter: grayscale(100%);background-position: top;"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2>{{__('Danh Sách Tình Nguyện Viên')}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{asset('/')}}">{{__('Trang Chủ')}}</a></li>
                <li class="color-thm-gray">/</li>
                <li><span>{{__('Danh Sách Tình Nguyện Viên')}}</span></li>
            </ul>
        </div>
    </section>
    <!--Page Header End-->

    <!--Team One Start-->
    <section class="team-one team-page">
        <div class="container">
            <table class="table" id="table-contribute">
                <thead>
                <tr>
                    <th scope="col">{{__('STT')}}</th>
                    <th>{{__('Họ và Tên')}}</th>
                    <th>{{__('Chức Vụ')}}</th>
                    <th>{{__('Nghề Nghiệp')}}</th>
                    <th>{{__('Ngày Tham Gia')}}</th>
                    <th>{{__('Chi Tiết')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($volunteer as $item)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{__('Tình Nguyện Viên')}}</td>
                        <td>{{$item->occupation}}</td>
                        <td>{{$item->created_at->format('F d, Y')}}</td>
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
                                                    <h1 class="font-weight-bold text-center">{{__('Chi Tiết Tình Nguyện Viên')}}</h1>
                                                    <div class="container mt-5">
                                                        <div class="m-auto mb-4">
                                                            <img class="m-auto" style="width:200px;height:200px;object-fit:cover;border-radius:50%" src="{{$item->image}}" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-center row">
                                                            <div class="col-md-12">
                                                                <div class="p-3] rounded">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Họ và Tên')}}: </span><span class="fw-normal"> {{$item->name}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold ">{{__('Chức Vụ')}}: </span><span class="fw-normal"> {{__($item->office)}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Nghề Nghiệp')}}:</span><span class="fw-normal"> {{__($item->occupation)}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Giáo Dục')}}:</span><span class="fw-normal"> {{__($item->education)}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Tuổi')}}:</span><span class="fw-normal"> {{\Carbon\Carbon::parse($item->birthday)->diff(\Carbon\Carbon::now())->y}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Ngày Tham Gia')}}:</span><span class="fw-normal"> {{$item->created_at->format('d-m-Y')}}</span></div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="border-0 mt-4"  colspan="2">{{__('Mô Tả Bản Thân: ')}}<span class="fw-normal">{{__($item->introduce)}}</span></td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <table class="table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="border-0 mt-4"  colspan="2">{{__('Lời Nhắn Khi Tham Gia: ')}}<span class="fw-normal">{{__($item->messages)}}</span></td>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!--Team One End-->

    <!--Become Volunteer Start-->
    <section class="become-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="become-volunteer__inner">
                        <div class="become-volunteer__left">
                            <h2>{!! __('Hãy chung tay cùng chúng tôi <br> vì một cuộc sống và tương <br> lai tốt đẹp hơn') !!}</h2>

                        </div>
                        <div class="become-volunteer__btn-box">
                            <a href="{{asset('/become-a-volunteer')}}" class="become-volunteer__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>{{__('Trở Thành Tình Nguyện Viên')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer End-->
@endsection
