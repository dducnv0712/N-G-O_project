@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Danh Sách')}}</strong>{{__('Người Dùng')}}</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="fw-bold">{{__('Danh Sách Cần Xét Duyệt')}}</h4>
            </div>
            <div class ="card-body">
                <table class="table" id="dataTable-volunteer-confirm">
                    <thead>
                    <tr>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Họ và Tên')}}</th>
                        <th>{{__('Địa Chỉ Email')}}</th>
                        <th>{{__('SĐT')}}</th>
                        <th>{{__('Địa Chỉ')}}</th>
                        <th>{{__('Ngày Gửi')}}</th>
                        <th>{{__('Chấp Nhận')}}</th>
                        <th>{{__('Từ Chối')}}</th>
                        <th>{{__('Chi Tiết')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($volunteer as $item)
                        @if($item->	approval == 1)
                            <tr>
                                @csrf
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td><div class="text-center"><a href="{{url('/admin/volunteer/admit',['id'=>$item->id])}}" class="btn btn-success"><i class="fas fa-check"></i></a></div></td>
                                <td><div class="text-center"><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#refuseModal-{{$item->id}}"><i class="fas fa-times"></i></button></div></td>
                                <td><div class="text-center"><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#infoModal-{{$item->id}}"><i class="fas fa-info-circle"></i></button></div></td>
                            </tr>
                            {{--refuse modal--}}
                            <div class="modal fade" id="refuseModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <form action="{{url('/admin/volunteer/refuse',['id'=>$item->id])}}" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="title">{{__('Chủ thể')}}</label>
                                                        <input id="title" class="form-control" name="subject">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="content">{{__('Lý Do Từ Chối')}}</label>
                                                        <textarea id="content" class="form-control" name="content">
                                                        </textarea>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{--info modal--}}
                            <div class="modal fade" id="infoModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card">
            <div class =" card-body">
                <table class="table" id="dataTable-volunteers">
                    <thead>
                    <tr>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Họ và Tên')}}</th>
                        <th>{{__('Địa Chỉ Email')}}</th>
                        <th>{{__('SĐT')}}</th>
                        <th>{{__('Địa Chỉ')}}</th>
                        <th>{{__('Ngày Gia Nhập')}}</th>
                        <th>{{__('Chi Tiết')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($volunteer as $item)
                        @if($item->	approval == 0)
                        <tr>
                            @csrf
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td><div class="text-center"><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#infoModal-{{$item->id}}"><i class="fas fa-info-circle"></i></button></div></td>
                            <div class="modal fade" id="infoModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

@endsection
