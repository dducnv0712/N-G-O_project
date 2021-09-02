@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Danh Sách: ')}}</strong>{{__('Dự Án')}}</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        @if(Auth::user()->role == 'ADMIN')
                            <li class="breadcrumb-item"><a class="btn btn-primary" href="{{url('/admin/projects/add')}}">{{__('Thêm Dự Án')}}</a></li>
                        @else
                            <li class="breadcrumb-item"><a class="btn btn-primary" href="{{url('/author/projects/add')}}">{{__('Thêm Dự Án')}}</a></li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
        @if(Auth::user()->role == 'ADMIN')
            <div class="card">
                <div class="card-header">
                    <h3 class=" fw-bold">{{__('Dứ án cần xét duyệt')}}</h3>
                </div>
                <div class="card-body">
                    <table class="table" id="dataTable">
                        <thead>
                        <tr>
                            <th>{{__('Hình Ảnh')}}</th>
                            <th>{{__('Tiêu Đề')}}</th>
                            <th>{{__('Người Đóng Góp')}}</th>
                            <th>{{__('Loại')}}</th>
                            <th>{{__('Ngày Khởi Tạo')}}</th>
                            <th>{{__('Ngày Cập Nhật')}}</th>
                            <th>{{__('Chi Tiết')}}</th>
                            <th>{{__('Xét Duyệt')}}</th>
                            <th>{{__('Từ Chối')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $item)
                            @if($item->approval == 1)
                                <tr>
                                    <td>
                                        <div class="post_image">
                                            <img src="{{$item->getImage()}}" alt="">
                                        </div>
                                    </td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        @if($item->contribute == null)
                                            <span class="badge bg-info">no-limit</span>
                                        @else
                                            {{$item->contribute}}
                                        @endif
                                    </td>
                                    <td class="d-none d-md-table-cell">{{$item->category->name}}</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                                    <td>{{$item->updated_at->format('d-m-Y')}}</td>
                                    <td class="text-center">
                                        <a data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="align-middle text-primary" data-feather="book-open"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('admin/projects/approval',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="thumbs-up"></i></a>

                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('admin/projects/important',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="thumbs-down"></i></a>

                                    </td>

                                </tr>
                                <div class="modal fade" id="details-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><b>Details Post</b></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="fw-bold text-center"><b>{{$item -> title}}</b></h2>
                                         ợ       <div class="text-center">
                                                    <img src="{{$item->getImage()}}" alt="{{$item->title}}">
                                                </div>
                                                <p>{!!$item->content!!}</p>
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
        @endif
        <div class="card">
            <div class="card-header">
                @if(Auth::user()->role == 'ADMIN')
                    <h3 class=" fw-bold">{{__('Tất cả dự án')}}</h3>
                @else
                    <h3 class=" fw-bold">{{__('Dự án của bạn')}}</h3>

                @endif
            </div>
            <div class="card-body">
                @if(Auth::user()->role == 'ADMIN')
                    <table class="table" id="dataTable-postAd" >
                        <thead>
                        <tr>
                            <th>{{__('Hình Ảnh')}}</th>
                            <th>{{__('Tiêu Đề')}}</th>
                            <th>{{__('Mục Tiêu')}}</th>
                            <th>{{__('Thể Loại')}}</th>
                            <th>{{__('Ngày Khởi Tạo')}}</th>
                            <th>{{__('Ngày Cập Nhật')}}</th>
                            <th>{{__('Hiển Thị')}}</th>
                            <th>{{__('Quan Trọng')}}</th>
                            <th>{{__('Chức Năng')}}</th>
                            <th>{{__('Đã Nhận')}}</th>
                            <th>{{__('Thống Báo')}}</th>
                            <th>{{__('Chi Tiết')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $item)
                            @if($item->approval == 0)
                                <tr>
                                    @php
                                        $amount = 0;

                                         foreach ($contribution as $item_contribution ){
                                             if($item_contribution->id_post == $item->id)
                                             $amount += $item_contribution->contribute_amount;
                                             }
                                    @endphp
                                    <td>
                                        <div class="post_image">
                                            <img src="{{$item->getImage()}}" alt="">
                                        </div>
                                    </td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        @if($item->contribute == null)
                                            <span class="badge bg-info">no-limit</span>
                                        @else
                                            {{$item->contribute}}
                                        @endif
                                    </td>
                                    <td class="d-none d-md-table-cell">{{$item->category->name}}</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                                    <td>{{$item->updated_at->format('d-m-Y')}}</td>

                                    @if($item->approval == 0)
                                        <td class="text-center">
                                            @if($item->active == 0)
                                                <a href="{{url('admin/projects/active',['id' => $item->id])}}"><i class="align-middle text-success" data-feather="eye"></i></a>
                                            @else
                                                <a href="{{url('admin/projects/active',['id' => $item->id])}}"><i class="align-middle text-danger" data-feather="eye-off"></i></a>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($item->important == 0)
                                                <a href="{{url('admin/projects/important',['id' => $item->id])}}"><i class="align-middle text-success" data-feather="thumbs-up"></i></a>
                                            @else
                                                <a href="{{url('admin/projects/important',['id' => $item->id])}}"><i class="align-middle text-danger" data-feather="thumbs-down"></i></a>
                                            @endif
                                        </td>
                                        <td class="table-action text-center">
                                            <div>
                                                <!-- {{--{{url('admin/projects/delete',["id"=>$item->id])}}--}} -->
                                                <a href="{{url('admin/projects/edit',['id' => $item->id])}}"><i class="align-middle text-warning" data-feather="edit-2"></i></a>
                                                <a onclick="deletePost({{$item->id}})" href="javascript:void(0)"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                            </div>

                                        </td>

                                        <td>
                                            @if($item->contribute == null)
                                                <span class="badge bg-info">no-limit</span>
                                            @elseif($amount/$item->contribute * 100 >= 100)
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Hoàn Thành</div>
                                                </div>
                                            @else
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning text-center text-dark" role="progressbar" style="width:{{$amount/$item->contribute * 100}}%" aria-valuenow="{{$amount/$item->contribute * 100}}" aria-valuemin="0" aria-valuemax="100">{{round($amount/$item->contribute * 100)}}%</div>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="table-action text-center">
                                            @if($item->active == 0)
                                                @if($item->send_mail == 1)
                                                    {{--                                    href="{{url('admin/projects/send-mail-news',["id"=>$item->id])}}"--}}
                                                    <a href="javascript:void(0)" onclick="sendMailPost({{$item->id}})" class=""><span class="badge bg-danger">send</span></a>
                                                @else
                                                    <span class="badge bg-success">sent</span>
                                                @endif
                                            @else
                                                <span class="badge bg-danger">non-active</span>
                                            @endif
                                        </td>
                                    @else
                                        <td class="text-center text-warning" colspan="5">Đang Chờ Xét Duyệt</td>
                                    @endif
                                    <td class="text-center">
                                        <a data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="align-middle text-primary" data-feather="book-open"></i></a>
                                    </td>

                                </tr>

                                <div class="modal fade" id="details-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><b>Details Post</b></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container overflow-hidden">
                                                    <h2 class="fw-bold text-center"><b>{{$item -> title}}</b></h2>
                                                    <div class="text-center">
                                                        <img src="{{$item->image}}" alt="{{$item->title}}">
                                                    </div>
                                                    <p>{!!$item->content!!}</p>
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
                @else
                    <table class="table" id="dataTable-postAth">
                        <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Contribute</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Updated At</th>

                            <th>Active</th>
                            <th>Important</th>
                            <th>Actions</th>
                            <th>Received</th>
                            <th>Send Mail</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $item)
                            @if($item->author == Auth::id())
                                <tr>
                                    @php
                                        $amount = 0;

                                         foreach ($contribution as $item_contribution ){
                                             if($item_contribution->id_post == $item->id)
                                             $amount += $item_contribution->contribute_amount;
                                             }
                                    @endphp
                                    <td>
                                        <div class="post_image">
                                            <img src="{{$item->getImage()}}" alt="">
                                        </div>
                                    </td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        @if($item->contribute == null)
                                            <span class="badge bg-info">no-limit</span>
                                        @else
                                            {{$item->contribute}}
                                        @endif
                                    </td>
                                    <td class="d-none d-md-table-cell">{{$item->category->name}}</td>
                                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                                    <td>{{$item->updated_at->format('d-m-Y')}}</td>

                                    @if($item->approval == 0)
                                        <td class="text-center">
                                            @if($item->active == 0)
                                                <a href="{{url('volunteer-dashboard/projects/hidden',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="eye"></i></a>
                                            @else
                                                <a href="{{url('volunteer-dashboard/projects/appear',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="eye-off"></i></a>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($item->important == 0)
                                                <a href="{{url('volunteer-dashboard/projects/normal',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="thumbs-up"></i></a>
                                            @else
                                                <a href="{{url('volunteer-dashboard/projects/important',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="thumbs-down"></i></a>
                                            @endif
                                        </td>
                                        <td class="table-action text-center">
                                            <div>
                                                {{--                                {{url('admin/projects/delete',["id"=>$item->id])}}--}}
                                                <a href="{{url('volunteer-dashboard/projects/edit',["id"=>$item->id])}}"><i class="align-middle text-warning" data-feather="edit-2"></i></a>
                                                <a onclick="deletePost({{$item->id}})" href="javascript:void(0)"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                            </div>

                                        </td>

                                        <td>
                                            @if($item->contribute == null)
                                                <span class="badge bg-info">no-limit</span>
                                            @elseif($amount/$item->contribute * 100 >= 100)
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Hoàn Thành</div>
                                                </div>
                                            @else
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning text-center text-dark" role="progressbar" style="width:{{$amount/$item->contribute * 100}}%" aria-valuenow="{{$amount/$item->contribute * 100}}" aria-valuemin="0" aria-valuemax="100">{{round($amount/$item->contribute * 100)}}%</div>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="table-action text-center">
                                            @if($item->active == 0)
                                                @if($item->send_mail == 1)
                                                    {{--                                    href="{{url('admin/projects/send-mail-news',["id"=>$item->id])}}"--}}
                                                    <a href="javascript:void(0)" onclick="sendMailPost({{$item->id}})" class=""><span class="badge bg-danger">send</span></a>
                                                @else
                                                    <span class="badge bg-success">sent</span>
                                                @endif
                                            @else
                                                <span class="badge bg-danger">non-active</span>
                                            @endif
                                        </td>
                                    @else
                                        <td class="text-center text-warning" colspan="5">Đang Chờ Xét Duyệt</td>
                                    @endif
                                    <td class="text-center">
                                        <a data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="align-middle text-primary" data-feather="book-open"></i></a>
                                    </td>

                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="details-{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl  modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel"><b>Details Post</b></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="fw-bold text-center"><b>{{$item -> title}}</b></h2>
                                                <div class="text-center">
                                                    <img src="{{$item->getImage()}}" alt="{{$item->title}}">
                                                </div>
                                                <p>{!!$item->content!!}</p>
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
                @endif
            </div>

        </div>

    </div>
@endsection


