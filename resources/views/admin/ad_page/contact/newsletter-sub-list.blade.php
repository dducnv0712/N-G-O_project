@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Analytics</strong> Dashboard</h3>
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
                        <th>ID</th>
                        <th>{{__('Họ và Tên')}}</th>
                        <th>Email</th>

                        <th>{{__('Ngày Khởi Tạo')}}</th>
                        <th>{{__('Ngày Cập Nhật')}}</th>
                        {{--                    <th>{{__('Hoạt động')}}</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newsletter as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td>{{$item->updated_at->format('d-m-Y')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
