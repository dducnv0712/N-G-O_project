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

                        <li class="breadcrumb-item"><a class="btn btn-primary" href="{{url('/admin/posts/add')}}">New Post</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic Table</h5>
                <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.</h6>
            </div>
            <table class="table">
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
                    <th>Details</th>
                    <th>Actions</th>
                    <th>Received</th>
                    <th>Send Mail</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $item)
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
                        <td class="d-none d-md-table-cell">{{$item->category_id}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="text-center">
                            @if($item->active == 1)
                                <a href="{{url('admin/posts/hidden',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="eye"></i></a>
                            @else
                                <a href="{{url('admin/posts/appear',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="eye-off"></i></a>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($item->important == 1)
                                <a href="{{url('admin/posts/normal',["id"=>$item->id])}}"><i class="align-middle text-success" data-feather="thumbs-up"></i></a>
                            @else
                                <a href="{{url('admin/posts/important',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="thumbs-down"></i></a>
                            @endif
                        </td>

                        <td class="text-center">
                                <a data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="align-middle text-primary" data-feather="book-open"></i></a>
                        </td>
                        <td class="table-action text-center">
                            <div>
                                <a href="{{url('admin/posts/edit',["id"=>$item->id])}}"><i class="align-middle text-warning" data-feather="edit-2"></i></a>
                                <a href="{{url('admin/posts/delete',["id"=>$item->id])}}"><i class="align-middle text-danger" data-feather="trash"></i></a>
                            </div>

                        </td>

                        <td>
                                @if($item->contribute == null)
                                    <span class="badge bg-info">no-limit</span>
                                @elseif(2000/$item->contribute * 100 == 100)
                                    <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Accomplished</div>
                                    </div>
                                @else
                                    <div class="progress">
                                    <div class="progress-bar bg-warning text-center text-dark" role="progressbar" style="width:{{2499.5/$item->contribute * 100}}%" aria-valuenow="{{2000/$item->contribute * 100}}" aria-valuemin="0" aria-valuemax="100">{{2499.5/$item->contribute * 100}}%</div>
                                    </div>
                                @endif
                        </td>
                        <td class="table-action text-center">
                            @if($item->active == 1)
                                @if($item->send_mail == 0)
                                    <a href="{{url('admin/posts/send-mail-news',["id"=>$item->id])}}" class=""><span class="badge bg-danger">send</span></a>
                                @else
                                    <span class="badge bg-success">sent</span>
                                @endif
                            @else
                            <span class="badge bg-danger">non-active</span>
                            @endif
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
                                    <p>{!!$item->description!!}</p>
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
@endsection


