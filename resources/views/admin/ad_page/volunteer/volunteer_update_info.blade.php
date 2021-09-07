<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Non-governmental Organizations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/bootstrap-5/css/bootstrap.css')}}">
    <style>
        .photo-preview img{
            width:5rem;
            object-fit:cover;
            border-radius: 50%;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div style="height:100vh" class="col-6 m-auto d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <h2>{{__('Cập Nhật Thông Tin')}}</h2>
                        <form method="POST" action="{{url('/volunteer-dashboard/volunteer-info-save',['id' => $volunteer ->id])}}">
                            @csrf
                            <div  id="holder-avatar" class="photo-preview mb-3 text-center">
                            </div>
                            <div>
                                <span class="fw-bold">{{__('Họ và Tên')}}:</span> {{$volunteer->name}}<br>
                                <span class="fw-bold">{{__('Email')}}:</span> {{$volunteer->email}}
                            </div>

                            <div class="mt-4">
                                <label for="thumbnail-post"  >{{ __('Ảnh Đại Diện') }}</label>
                                <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="file-manager-volunteer" data-input="thumbnail-post" data-preview="holder-avatar" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i>
                                     Choose
                                 </a>
                               </span>
                                    <input id="thumbnail-post"  placeholder="Image URL" name="image" class="form-control" required type="text" >
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="education"  >{{ __('Giáo Dục') }}</label>
                                <input id="education" class="block mt-1 w-full form-control" type="text" name="education" value="{{$volunteer->education}}" required autocomplete="new-password" />
                            </div>
                            <div class="mt-4">
                                <label for="occupation"  >{{ __('Nghề Ngiệp') }}</label>
                                <input id="occupation" class="block mt-1 w-full form-control" type="text" name="occupation" value="{{$volunteer->occupation}}" required autocomplete="new-password" />
                            </div>
                            <div class="mt-4">
                                <label for="address"  >{{ __('Địa Chỉ') }}</label>
                                <textarea id="address" class="block mt-1 w-full form-control" type="text" name="address"   required autocomplete="new-password" >{{$volunteer->address}}</textarea>
                            </div>
                            <div class="mt-4">
                                <label for="introduce"  >{{ __('Giới Thiệu Bản Thân') }}</label>
                                <textarea id="introduce" class="block mt-1 w-full form-control" type="text" name="introduce" required autocomplete="new-password" ></textarea>
                            </div>

                            <div class="d-flex align-items-center justify-items-end mt-4">
                                <button type="submit" class="ml-4 btn btn-primary">
                                    {{ __('Cập Nhật') }}
                                </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('dist/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('dist/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script type="text/javascript">
    $('#file-manager-volunteer').filemanager('image');
    var route_filemanager = "/volunteer-dashboard/project-filemanager";
    $('#file-manager-volunteer').filemanager('image', {prefix: route_filemanager});
</script>
</body>
</html>
