@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Danh Sách: ')}}</strong> {{__('Đóng Góp')}}</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <table class="table" id="dataTable">
                    <thead>
                    <tr>
                        <th>{{__('Id')}}</th>
                        <th>{{__('Họ và Tên')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Số Tiền Đóng Góp')}}</th>
                        <th>{{__('Người Đóng Góp')}}</th>
                        <th>{{__('Chi Tiết')}}</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contribution as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>@money($item->contribute_amount*22836)</td>
                            <td>{{$item->post->title}}</td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="align-middle text-primary" data-feather="book-open"></i></a>
                            </td>

                        </tr>
                        <div class="modal fade" id="details-{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body m-sm-3 m-md-5">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="text-muted">Contribute No.</div>
                                                                <strong>{{$item->contribute_id}}</strong>
                                                            </div>
                                                            <div class="col-md-6 text-md-right">
                                                                <div class="text-muted">Contribute Date</div>
                                                                <strong> {{$item->created_at->format('F d, Y')}}</td></strong>
                                                            </div>
                                                        </div>

                                                        <hr class="my-4" />

                                                        <div class="row mb-4">
                                                            <div class="col-md-6">
                                                                <strong >{{__('Chi Tiết Đóng Góp')}}</strong>

                                                                <p>
                                                                    {{__('Họ và Tên')}}:<br>
                                                                    ID. <br>
                                                                    {{__('Số tiền đóng góp')}}:<br>
                                                                    Email:<br>
                                                                    {{__('Quốc Gia:')}}:<br>
                                                                    {{__('Đối tượng đóng góp:')}}<br>
                                                                    {{__('Trạng thái:')}}<br>

                                                                </p>

                                                            </div>

                                                            <div class="col-md-6 text-md-right">
                                                                <div class="text-muted">information</div>

                                                                <p>
                                                                    {{$item->full_name}} <br>
                                                                    {{$item->id}}<br>
                                                                    @money($item->contribute_amount*22836)<br>
                                                                    {{$item->email}}<br>
                                                                    {{$item->country}}<br>
                                                                    {{$item->id_post}}<br>
                                                                    {{$item->status}}

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <p>
                                                                {{__('Lời Nhắn').': '.$item->messages}}
                                                            </p>
                                                        </div>


                                                        {{--                                                            <div class="text-center">--}}
                                                        {{--                                                                <p class="text-sm">--}}
                                                        {{--                                                                    <strong>Extra note:</strong> Please send all items at the same time to the shipping address. Thanks in advance.--}}
                                                        {{--                                                                </p>--}}

                                                        {{--                                                                <a href="#" class="btn btn-primary">--}}
                                                        {{--                                                                    Print this receipt--}}
                                                        {{--                                                                </a>--}}
                                                        {{--                                                            </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection



