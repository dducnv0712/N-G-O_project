@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Danh Sách: ')}}</strong> Dashboard</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header-">
                <h3 class="card-title"> {{__('Tin Nhắn Chờ')}}</h3>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{__('Tên Của Bạn')}}</th>
                        <th>{{__('SĐT')}}</th>
                        <th>Email</th>
                        <th>{{__('Tin Nhắn')}}</th>
                        <th>{{__('Ngày Khởi Tạo')}}</th>
                        <th>{{__('Ngày Cập Nhật')}}</th>
                        <th>{{__('Chi Tiết')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $item)
                        @if($item->reply == 1)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->messenger}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td>{{$item->updated_at->format('d-m-Y')}}</td>
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
                                                        <div class="card-header d-flex  align-items-center" style="background-color:#eff5f4">
                                                            <i class="fas fa-user-circle me-2" style="font-size:30px"></i> <span style="font-size:18px;font-weight:600;margin-left:10px" class="fw-bold ms-3"> {{$item->name}}</span>
                                                        </div>
                                                        <div class="card-body m-sm-3 m-md-5">
                                                            <div class="container ">
                                                                <span ><i class="fas fa-comments" style="font-size:20px;"></i> {{__('Lời nhắn')}}</span>
                                                                <div class="card card-body mt-2" style="background-color:#eff5f4;border-radius: 0 30px 30px 30px">
                                                                    <p>{{$item->message}}</p>
                                                                </div> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                    <i class="far fa-comment-dots"></i> {{__('Trả Lời')}}
                                                                </button>
                                                                <div class="collapse mt-3" id="collapseExample">
                                                                    <div class="card">
                                                                        <form action="{{url('/admin/contact/reply-contact',['id'=>$item->id])}}" method="post">
                                                                            @csrf
                                                                            <div class="card-body">
                                                                          <textarea name="messages_reply" id="reply-mail">
                                                                          </textarea>
                                                                                <div class="text-right">
                                                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> {{__('Gửi')}}</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
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
            <div class="card-header-">
                <h3 class="card-title"> {{__('Tin Nhắn Đã Trả Lời')}}</h3>
            </div>
            <div class="card-body">
                <table class="table" id="dataTable-replied">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{__('Tên Của Bạn')}}</th>
                        <th>{{__('SĐT')}}</th>
                        <th>Email</th>
                        <th>{{__('Tin Nhắn')}}</th>
                        <th>{{__('Ngày Khởi Tạo')}}</th>
                        <th>{{__('Ngày Cập Nhật')}}</th>
                        <th>{{__('Chi Tiết')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $item)
                        @if($item->reply == 0)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->messenger}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td>{{$item->updated_at->format('d-m-Y')}}</td>
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
                                                        <div class="card-header d-flex  align-items-center" style="background-color:#eff5f4">
                                                            <i class="fas fa-user-circle me-2" style="font-size:30px"></i> <span style="font-size:18px;font-weight:600;margin-left:10px" class="fw-bold ms-3"> {{$item->name}}</span>
                                                        </div>
                                                        <div class="card-body m-sm-3 m-md-5">
                                                            <div class="container ">
                                                                <span ><i class="fas fa-comments" style="font-size:20px;"></i> {{__('Lời nhắn')}}</span>
                                                                <div class="card card-body mt-2" style="background-color:#eff5f4;border-radius: 0 30px 30px 30px">
                                                                    <p>{{$item->message}}</p>

                                                                </div>
                                                                <div class="text-right">
                                                                    <span ><i class="fas fa-reply" style="font-size:20px;"></i> {{__('Trả Lời')}}</span>
                                                                </div>
                                                                <div class="card card-body" style="background-color:#d0ecec;border-radius: 30px 0 30px 30px">
                                                                    <span>{!!$item->reply_message!!}</span>
                                                                </div>
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
                        @endif

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
