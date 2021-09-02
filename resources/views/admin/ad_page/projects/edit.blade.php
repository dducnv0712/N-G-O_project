
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
                    <form  action="{{url("/admin/projects/update",["id" =>$projects->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <div id="holder" class="photo-preview mb-3">
                                <img src="{{$projects->getImage()}}" alt="" />
                            </div>

                            <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                                <input id="thumbnail"  placeholder="Image URL" name="image" class="form-control" value="{{$projects->getImage()}}" type="text" >
                            </div>


                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">{{__('Title')}}</label>
                            <input name="title" value="{{$projects->title}}" type="text" id="title" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" name="category_id" id="category">
                                <option  selected value="{{$projects->category_id}}" > {{$projects->category->name}} </option>
                                @foreach($categories as $item)
                                    <option  value="{{$item->id}}"> {{$item->name}}</option>

                                @endforeach

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="donate" class="form-label">Contribution</label>
                            <input name="donate" value="{{$projects->contribute}}" class="form-control" type="number" id="donate" min="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="desc">Description</label>
                            <textarea name="desc" id="desc">
                                {{$projects->description}}
                        </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <textarea name="content" id="content">
                                {{$projects->content}}
                        </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                @else
                    <form  action="{{url("/volunteer-dashboard/projects/update",["id" =>$projects->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <div id="holder" class="photo-preview mb-3">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                                <input id="thumbnail"  placeholder="Image URL" name="image" class="form-control" value="{{$projects->getImage()}}" type="text" >
                            </div>


                        </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" value="{{$projects->title}}" type="text" id="title" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id" id="category">
                            <option  selected value="{{$projects->category_id}}" > {{$projects->category->name}} </option>
                            @foreach($categories as $item)
                                <option  value="{{$item->id}}"> {{$item->name}}</option>

                            @endforeach

                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="donate" class="form-label">Contribution</label>
                        <input name="donate" value="{{$projects->contribute}}" class="form-control" type="number" id="donate" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="desc">Description</label>
                        <textarea name="desc" id="desc">
                                {{$projects->description}}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>
                        <textarea name="content" id="content">
                                {{$projects->content}}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endif
            </div>
        </div>

    </div>
@endsection

