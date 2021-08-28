
@extends('admin.admin_layout')
@section('main')
    <div class="container-fluid p-0" xmlns="http://www.w3.org/1999/html">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Analytics</strong> Dashboard</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic form</h5>
                <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
            </div>
            <div class="card-body">
                @if(Auth::user()->role == 'ADMIN')
                    <form  action="{{url("/admin/posts/update",["id" =>$posts->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="file" class="form-label">{{__('Hình Ảnh')}}</label>
                            <input name="image" type="file" id="file" class="form-control">
                            <input value="{{$posts->image}}" name="image_edit" id="file" type="text" hidden>

                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">{{__('Tiêu Đề')}}</label>
                            <input name="title" value="{{$posts->title}}" type="text" id="title" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">{{__('Thể Loại')}}</label>
                            <select class="form-control" name="category_id" id="category">
                                <option  selected value="{{$posts->category_id}}" > {{$posts->category->name}} </option>
                                @foreach($categories as $item)
                                    <option  value="{{$item->id}}"> {{$item->name}}</option>

                                @endforeach

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="donate" class="form-label">{{__('Số Tiền Đóng Góp')}}</label>
                            <input name="donate" value="{{$posts->contribute}}" class="form-control" type="number" id="donate" min="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="desc">{{__('Miêu Tả')}}</label>
                            <textarea name="desc" id="desc">
                                {{$posts->description}}
                        </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">{{__('Nội Dung')}}</label>
                            <textarea name="content" id="content">
                                {{$posts->content}}
                        </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{__('Xác Nhận')}}</button>
                    </form>

                @else
                    <form  action="{{url("/author/posts/update",["id" =>$posts->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Image</label>
                        <input name="image" type="file" id="file" class="form-control">
                        <input value="{{$posts->image}}" name="image_edit" id="file" type="text" hidden>

                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" value="{{$posts->title}}" type="text" id="title" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id" id="category">
                            <option  selected value="{{$posts->category_id}}" > {{$posts->category->name}} </option>
                            @foreach($categories as $item)
                                <option  value="{{$item->id}}"> {{$item->name}}</option>

                            @endforeach

                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="donate" class="form-label">Contribution</label>
                        <input name="donate" value="{{$posts->contribute}}" class="form-control" type="number" id="donate" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="desc" id="desc">
                                {{$posts->description}}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>
                        <textarea name="content" id="content">
                                {{$posts->content}}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endif
            </div>
        </div>

    </div>
@endsection

