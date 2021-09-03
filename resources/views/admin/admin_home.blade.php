@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Thông Số')}}:</strong> {{__('Thống Kê')}}</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">{{__('Đang Nhận Đóng Góp')}}</h5>
                                    <h1 class="mt-1 mb-3">{{count($post)}}</h1>
                                    <div class="mb-1">
                                        <span class="text-muted">{{__('Trường hợp')}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">{{__('Số Người Đã Đóng Góp')}}</h5>
                                    <h1 class="mt-1 mb-3">{{count($contribution)}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">{{__('Đóng Góp Thành Công')}}</h5>
                                    <h1 class="mt-1 mb-3">{{count($count_contribute)}}</h1>
                                    <div class="mb-1">
                                        <span class="text-muted">{{__('Trường hợp')}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">{{__('Số tiền được đóng góp')}}</h5>
                                    <h1 class="mt-1 mb-3">@money($amount)</h1>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Monthly Sales</h5>
                    </div>
                    <div class="card-body d-flex w-100">
                        <div class="align-self-center chart chart-lg">
                            <canvas id="chartjs-dashboard-bar"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header ">

                        <h4 class="font-weight-bold mb-0">{{__('Danh Sách Người Đã Đóng Góp Hôm Nay')}}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0"  id="dataTable">
                            <thead>
                            <tr>
                                <th>{{__('Id')}}</th>
                                <th>{{__('Họ và Tên')}}</th>
                                <th>{{__('Email')}}</th>
                                <th>{{__('Số Tiền Đóng Góp')}}</th>
                                <th>{{__('Đối Tượng Đóng Góp')}}</th>
                                <th>{{__('Ngày Đóng Góp')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contribution as $item)
                                @if($item->created_at->format('d-m-Y') == $now)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>@money($item->contribute_amount*22854)</td>
                                        <td>{{$item->project->title}}</td>
                                        <td>{{$item->created_at}}</td>
                                    </tr>
                                @endif

                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>


        <div class="row">

            <div class="col-12 col-md-12 col-xxl-8 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Real-Time</h5>
                    </div>
                    <div class="card-body px-4">
                        <div id="world_map" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-4 d-flex order-1 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
