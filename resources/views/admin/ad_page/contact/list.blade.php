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
                    <th>{{__('Hoạt động')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->messenger}}</td>
                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                        <td>{{$item->updated_at->format('d-m-Y')}}</td>
                        <td class="table-action">
                            <!-- Modal -->
                            <div class="modal fade" id="edit-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" >
                                        <form action="{{url('admin/contact/update',["id"=>$item->id])}}" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="role" class="form-label fw-bold">Role</label>
                                                <select name="role" id="role" class="form-control">
                                                    <option value="ADMIN">ADMIN</option>
                                                    <option value="AUTHOR">AUTHOR</option>
                                                    <option value="USER">USER</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button  type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($item->id == Auth::user()->id)
                                <span class="badge bg-success">you</span>
                            @else
                                <a data-bs-toggle="modal" data-bs-target="#edit-{{$item->id}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            @endif()
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
