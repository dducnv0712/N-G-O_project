@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{__('Danh Sách')}}: </strong>{{__('Tinh Nguyện Viên')}}</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                       <li class="breadcrumb-item"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('Thêm Tình Nguyện Viên')}}</a></li>
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
                                <td><div class="text-center"><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="fas fa-info-circle"></i></button></div></td>
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
                            <div class="modal fade" id="details-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered  modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                        </div>
                                        <div class="modal-body" id="contribute-details">
                                            <div class="m-auto mb-4  text-center">
                                                <img class="m-auto" style="width:200px;height:100px;object-fit:contain" src="{{asset('dist/assets/images/resources/Charity.png')}}" alt="">
                                            </div>

                                            <div style="background-color:#eff5f4" class="card mt-3">

                                                <div  class="card-body ">
                                                    <h1 class="font-weight-bold text-center">{{__('Chi Tiết Tình Nguyện Viên')}}</h1>
                                                    <div class="container ">
                                                        <div class="m-auto mb-4  text-center">
                                                            <img class="m-auto" style="width:300px;height:300px;object-fit:contain" src="{{$item->image}}" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-center row">
                                                            <div class="col-md-12">
                                                                <div class="p-3 rounded">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Họ và Tên')}}: </span><span class="fw-normal"> {{$item->name}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold ">{{__('Chức Vụ')}}: </span><span class="fw-normal"> {{__($item->office)}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Nghề Nghiệp')}}:</span><span class="fw-normal"> {{__($item->occupation)}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Giáo Dục')}}:</span><span class="fw-normal"> {{__($item->education)}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Tuổi')}}:</span><span class="fw-normal"> {{\Carbon\Carbon::parse($item->birthday)->diff(\Carbon\Carbon::now())->y}}</span></div>
                                                                            <div class="billed"><span class="font-weight-bold">{{__('Ngày Tham Gia')}}:</span><span class="fw-normal"> {{$item->created_at->format('d-m-Y')}}</span></div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <div class="card card-body">
                                                                            <p><span class="fw-bold font-weight-bold">{{__('Mô Tả Bản Thân')}}</span>: {{$item->introduce}}</p>
                                                                        </div>
                                                                        <div class="card card-body">
                                                                            <p><span class="fw-bold font-weight-bold">{{__('Lời Nhắn Khi Tham Gia')}}: </span>{{$item->message}}</p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
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
                        <th>{{__('Chức Vụ')}}</th>
                        <th>{{__('Địa Chỉ')}}</th>
                        <th>{{__('Ngày Gia Nhập')}}</th>
                        <th>{{__('Nổi Bật')}}</th>
                        <th>{{__('Chức Năng')}}</th>
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
                            <td>{{$item->office}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->created_at->format('d-m-Y')}}</td>
                            <td class="text-center">
                                @if($item->important == 0)
                                    <a href="{{url('admin/volunteer/important',['id' => $item->id])}}"><i class="align-middle text-success" data-feather="thumbs-up"></i></a>
                                @else
                                    <a href="{{url('admin/volunteer/important',['id' => $item->id])}}"><i class="align-middle text-danger" data-feather="thumbs-down"></i></a>
                                @endif
                            </td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#update-{{$item->id}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="javascript:void(0)"  onclick="deleteVolunteer({{$item->id}})"><i class="align-middle" data-feather="trash"></i></a>
                            </td>

                            <td><div class="text-center"><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#details-{{$item->id}}"><i class="fas fa-info-circle"></i></button></div></td>

                        </tr>

                        @endif

                        {{--modal update--}}
                        <div class="modal fade" id="update-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">

                                <div class="modal-content">
                                    <form action="{{url('/admin/volunteer/update',['id'=>$item->id])}}" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div id="holder-post-{{$item->id}}" class="photo-preview mb-3">
                                                    <img src="{{$item->image}}">
                                                </div>
                                                <div class="input-group">
                                                   <span class="input-group-btn">
                                                     <a id="projects-upload-volunteer-{{$item->id}}" onclick="imageVolunteer({{$item->id}})" data-input="thumbnail-post-{{$item->id}}" data-preview="holder-post-{{$item->id}}" class="btn btn-primary">
                                                       <i class="fa fa-picture"></i> Choose
                                                     </a>
                                                   </span>
                                                    <input id="thumbnail-post-{{$item->id}}"  placeholder="Image URL" name="image" class="form-control" type="text" value="{{$item->image}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Họ và Tên')}}</label>
                                                <input id="nameCategory" type="text" name="name" class="form-control nameCate rounded-3" value="{{$item->name}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Địa Chỉ Email')}}</label>
                                                <input id="nameCategory" type="email" name="email" class="form-control nameCate rounded-3" value="{{$item->email}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Số Điện Thoại')}}</label>
                                                <input id="nameCategory" type="tel" name="phone" class="form-control nameCate rounded-3" value="{{$item->phone}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Ngày Sinh')}}</label>
                                                <input id="nameCategory" type="date" name="date" class="form-control nameCate rounded-3" value="{{$item->birthday}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Nghề Nghệp')}}</label>
                                                <input id="nameCategory" type="text" name="occupation" class="form-control nameCate rounded-3" value="{{$item->occupation}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Chức Vụ')}}</label>
                                                <input id="nameCategory" type="text" name="office" class="form-control nameCate rounded-3" required value="{{$item->office}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Giáo Dục')}}</label>
                                                <input id="nameCategory" type="text" name="education" class="form-control nameCate rounded-3" value="{{$item->education}}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Địa Chỉ')}}</label>
                                                <textarea id="nameCategory" type="text" name="address" class="form-control nameCate rounded-3" required>{{$item->address}}"</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nameCategory" class="form-label fw-bold">{{__('Mô Tả')}}</label>
                                                <textarea id="nameCategory" type="text" name="introduce" class="form-control nameCate rounded-3" required>{{$item->introduce}}</textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>

                        {{--.modal update--}}


                        {{--modal details--}}
                        <div class="modal fade" id="details-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="modal-body" id="contribute-details">
                                        <div class="m-auto mb-4  text-center">
                                            <img class="m-auto" style="width:200px;height:100px;object-fit:contain" src="{{asset('dist/assets/images/resources/Charity.png')}}" alt="">
                                        </div>

                                        <div style="background-color:#eff5f4" class="card mt-3">

                                            <div  class="card-body ">
                                                <h1 class="font-weight-bold text-center">{{__('Chi Tiết Tình Nguyện Viên')}}</h1>
                                                <div class="container ">
                                                    <div class="m-auto mb-4  text-center">
                                                        <img class="m-auto" style="width:300px;height:300px;object-fit:contain" src="{{$item->image}}" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-center row">
                                                        <div class="col-md-12">
                                                            <div class="p-3 rounded">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="billed"><span class="font-weight-bold">{{__('Họ và Tên')}}: </span><span class="fw-normal"> {{$item->name}}</span></div>
                                                                        <div class="billed"><span class="font-weight-bold ">{{__('Chức Vụ')}}: </span><span class="fw-normal"> {{__($item->office)}}</span></div>
                                                                        <div class="billed"><span class="font-weight-bold">{{__('Nghề Nghiệp')}}:</span><span class="fw-normal"> {{__($item->occupation)}}</span></div>
                                                                        <div class="billed"><span class="font-weight-bold">{{__('Giáo Dục')}}:</span><span class="fw-normal"> {{__($item->education)}}</span></div>
                                                                        <div class="billed"><span class="font-weight-bold">{{__('Tuổi')}}:</span><span class="fw-normal"> {{\Carbon\Carbon::parse($item->birthday)->diff(\Carbon\Carbon::now())->y}}</span></div>
                                                                        <div class="billed"><span class="font-weight-bold">{{__('Ngày Tham Gia')}}:</span><span class="fw-normal"> {{$item->created_at->format('d-m-Y')}}</span></div>


                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <div class="card card-body">
                                                                        <p><span class="fw-bold font-weight-bold">{{__('Mô Tả Bản Thân')}}</span>: {{$item->introduce}}</p>
                                                                    </div>
                                                                    <div class="card card-body">
                                                                        <p><span class="fw-bold font-weight-bold">{{__('Lời Nhắn Khi Tham Gia')}}: </span>{{$item->message}}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Đóng')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--.modal details--}}
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">
                    <form action="{{url('/admin/volunteer/save')}}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <div id="holder-post" class="photo-preview mb-3">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="projects-upload-volunteer" data-input="thumbnail-post" data-preview="holder-post" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                                    <input id="thumbnail-post"  placeholder="Image URL" name="image" class="form-control" type="text" >
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Họ và Tên')}}</label>
                                <input id="nameCategory" type="text" name="name" class="form-control nameCate rounded-3" required>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Địa Chỉ Email')}}</label>
                                <input id="nameCategory" type="email" name="email" class="form-control nameCate rounded-3" required>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Số Điện Thoại')}}</label>
                                <input id="nameCategory" type="tel" name="phone" class="form-control nameCate rounded-3" required>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Ngày Sinh')}}</label>
                                <input id="nameCategory" type="date" name="date" class="form-control nameCate rounded-3" required>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Nghề Nghệp')}}</label>
                                <input id="nameCategory" type="text" name="occupation" class="form-control nameCate rounded-3" required>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Chức Vụ')}}</label>
                                <input id="nameCategory" type="text" name="office" class="form-control nameCate rounded-3" required value="{{__('Tình Nguyện Viên')}}">
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Giáo Dục')}}</label>
                                <input id="nameCategory" type="text" name="education" class="form-control nameCate rounded-3" required>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Địa Chỉ')}}</label>
                                <textarea id="nameCategory" type="text" name="address" class="form-control nameCate rounded-3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="nameCategory" class="form-label fw-bold">{{__('Mô Tả')}}</label>
                                <textarea id="nameCategory" type="text" name="introduce" class="form-control nameCate rounded-3" required></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

@endsection
