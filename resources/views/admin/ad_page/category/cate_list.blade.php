@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Analytics')}}</strong>{{__('Dashboard')}} </h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCate">
                                {{__('New Category')}}
                            </button>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">{{__('STT')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr>
                             <td scope="row" >{{$loop->index+1}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td>{{$item->updated_at->format('d-m-Y')}}</td>
                            <td>
                                @if($item->active == 0)
                                    <a href="{{url('admin/category/hidden',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="eye"></i></a>
                                @else
                                    <a href="{{url('admin/category/appear',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="eye-off"></i></a>
                                @endif
                            </td>

                            <td class="table-action">
                                <!-- Modal -->
                                <div class="modal fade" id="Edit-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form  action="{{url('admin/category/update',["id"=>$item->id])}}" method="post">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="nameCategory" class="form-label fw-bold">Tên Thể Loại</label>
                                                        <input value="{{$item->name}}" id="nameCategory" name="name" class="form-control nameEdit rounded-3" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <a data-bs-toggle="modal" data-bs-target="#Edit-{{$item->id}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="javascript:void(0)"  onclick="deleteCategory({{$item->id}})"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addCate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form >
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nameCategory" class="form-label fw-bold">Tên Thể Loại</label>

                            <input id="nameCategory" type="text" name="name" class="form-control nameCate rounded-3" required>
                        </div>
                    </div>
                    <div class="modal-footer">
{{--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                        <button type="button" id="category_add"  class="btn  btn-success">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
