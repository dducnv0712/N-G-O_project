
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
                    <form action="{{asset("/admin/projects/save")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div id="holder-post" class="photo-preview mb-3">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="projects-upload" data-input="thumbnail-post" data-preview="holder-post" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                            <input id="thumbnail-post"  placeholder="Image URL" name="image" class="form-control" type="text" >
                        </div>


                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" id="title" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id" id="category">
                            <option selected disabled > Select Category</option>
                            @foreach($categories as $item)
                                <option  value="{{$item->id}}"> {{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="donate" class="form-label">{{__('Contribute Amount')}}</label>
                        <input name="donate" class="form-control" type="number" id="donate" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="desc">{{__('Description')}}</label>
                        <textarea name="desc" id="desc">

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">{{__('Content')}}</label>
                        <textarea name="content" id="content">

                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                </form>
                @else
                    <form action="{{asset("/volunteer-dashboard/projects/save")}}" method="post" enctype="multipart/form-data">
                        @csrf
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
                            <label for="title" class="form-label">{{__('Title')}}</label>
                            <input name="title" type="text" id="title" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">{{__('Category')}}</label>
                            <select class="form-control" name="category_id" id="category">
                                <option selected disabled >{{__('Select Category')}}</option>
                                @foreach($categories as $item)
                                    <option  value="{{$item->id}}"> {{$item->name}}</option>

                                @endforeach

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="donate" class="form-label">{{__('Contribution')}}</label>
                            <input name="donate" class="form-control" type="number" id="donate" min="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="desc">{{__('Description')}}</label>
                            <textarea name="desc" id="desc">

                        </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">{{__('Content')}}</label>
                            <textarea name="content" id="content">

                        </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </form>

                @endif
            </div>
        </div>

    </div>
@endsection

