@extends('layout')
@section('main')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fminhhagroup.com%2F2017%2F11%2F25%2Fchung-tay-giup-do-tre-em-vung-cao%2F&psig=AOvVaw30GOPwJuUmJzWprteEK-mw&ust=1630053224555000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKC669GjzvICFQAAAAAdAAAAABBI');"></div>
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
            <table class="table" id="table-contribute">
                <thead>
                <tr>
                    <th scope="col">{{__('STT')}}</th>
                    <th >{{__('Số phiếu thu')}}</th>
                    <th style="width:200px">{{__('Họ và Tên')}}</th>
                    <th >{{__('Số Tiền')}}</th>
                    <th >{{__('Đối Tượng Đóng Góp')}}</th>
                    <th >{{__('Chi Tiết')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contribute as $item)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$item->contribute_id}}</td>
                    <td>{{$item->full_name}}</td>
                    <td>@money($item->contribute_amount*22854)</td>
                    <td>{{$item->post->title}}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <a class="details-contributor" data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}">
                            <i class="fas fa-info-circle"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="details-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="contribute-details">
                                        <div class="m-auto mb-4">
                                            <img class="m-auto" src="{{asset('dist/assets/images/resources/logo-3.png')}}" alt="">
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
                                                                        <div class="billed"><span class="font-weight-bold ">{{__('Ngày Đóng Góp')}}: </span><span class="fw-normal"> {{$item->created_at->format('F').' '.$item->created_at->format('d, Y') }}</span></div>
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
                                                                                <td>{{$item->post->title}}</td>
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
                                        <button type="button" id="download-pdf" class="btn btn-danger"><i class="fas fa-file-pdf me-2"></i>Download PDF</button>

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


@endsection
