@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Danh Sách</strong> Người Dùng</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class =" card-body">
                <table class="table" id="dataTable">
                    <thead>
                    <tr>
                        <th style="width:10%;">{{__('')}}</th>
                        <th style="width:20%;">{{__('Họ và Tên')}}</th>
                        <th style="width:20%">Email</th>
                        <th class="d-none d-md-table-cell" style="width:10%">Role</th>
                        <th style="width:15%">Created_at</th>
                        <th style="width:20%">Updated_at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $item)
                        <tr>
                            @csrf
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->role}}</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td>{{$item->updated_at->format('d-m-Y')}}</td>
                            <td class="table-action">
                                <!-- Modal -->
                                <div class="modal fade" id="edit-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" >
                                            <form action="{{url('admin/user/update',["id"=>$item->id])}}" method="post">
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
