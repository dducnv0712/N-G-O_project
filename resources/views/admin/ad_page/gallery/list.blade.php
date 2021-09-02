@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Danh Sách: ')}}</strong>{{__('Dashboard')}} </h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCate">
                                {{__('Thêm Ảnh')}}
                            </button>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table" id="dataTable-gallery">
                    <thead>
                    <tr>
                        <th scope="col">{{__('STT')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Hình Ảnh')}}</th>
                        <th>{{__('Tiêu Đề')}}</th>
                        <th>{{__('Ngày Tạo')}}</th>
                        <th>{{__('Ngày Cập Nhật')}}</th>
                        <th>{{__('Hiển Thị')}}</th>
                        <th>{{__('Chức Năng')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gallery as $item)
                        <tr>
                            <td scope="row" >{{$loop->index+1}}</td>
                            <td>{{$item->id}}</td>
                            <td>
                                <img style="width:90px;height:90px;object-fit: contain" src="{{$item->image}}" alt="">
                            </td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td>{{$item->updated_at->format('d-m-Y')}}</td>
                            <td>
                                @if($item->active == 0)
                                    <a href="{{url('admin/gallery/active',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="eye"></i></a>
                                @else
                                    <a href="{{url('admin/gallery/active',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="eye-off"></i></a>
                                @endif
                            </td>

                            <td class="table-action">
                                <!-- Modal -->
                                <div class="modal fade" id="Edit-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <form  action="{{url('admin/gallery/update',["id"=>$item->id])}}" method="post">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Cập Nhật Ảnh')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label fw-bold">{{__('Tiêu Đề')}}</label>

                                                        <input id="title" value="{{$item->title}}" type="text" name="title" class="form-control nameCate rounded-3" required>
                                                    </div>
                                                    <div class="mb-3">

                                                        <div id="holder" class="photo-preview mb-3">
                                                            <i class="fas fa-image"></i>
                                                            <img src="{{$item->image}}" alt="">
                                                        </div>
                                                        <label for="thumbnail" class="form-label fw-bold">{{__('Hình Ảnh')}}</label>

                                                        <div class="input-group">
                                                           <span class="input-group-btn">
                                                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                               <i class="fa fa-picture-o"></i> Choose
                                                             </a>
                                                           </span>
                                                            <input id="thumbnail" value="{{$item->image}}" placeholder="Image URL" name="image" class="form-control" type="text" >
                                                        </div>


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
                                <a href="javascript:void(0)"  onclick="deleteGallery({{$item->id}})"><i class="align-middle" data-feather="trash"></i></a>
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
                <form method="POST" action="{{url('/admin/gallery/save')}}" >
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">{{__('Tiêu Đề')}}</label>

                            <input id="title" type="text" name="title" class="form-control nameCate rounded-3" required>
                        </div>
                        <div class="mb-3">

                            <div id="holder-gallery" class="photo-preview mb-3">
                                <i class="fas fa-image"></i>
                            </div>
                            <label for="thumbnail-gallery" class="form-label fw-bold">{{__('Hình Ảnh')}}</label>

                            <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="gallery-upload" data-input="thumbnail-gallery" data-preview="holder-gallery" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>

                                <input id="thumbnail-gallery"  placeholder="Image URL" name="image" class="form-control" type="text" >
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"  class="btn  btn-success">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
