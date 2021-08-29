<script src="{{asset('dist/jquery/jquery-3.4.1.min.js')}}"></script>
{{--<script src="{{asset('dist/bootstrap-5/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('dist/src/js/modules/vector-map.js')}}"></script>
<script src="{{asset('dist/summernote/summernote-bs4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/dist/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('dist/data-table/datatables.min.js')}}"></script>
<script>
    $(function () {
        $('#dataTable').DataTable();
        $('#dataTable-postAd').DataTable();
        $('#dataTable-postAth').DataTable();
        $('#dataTable-volunteer-confirm').DataTable();
        $('#dataTable-volunteers').DataTable();


    })
</script>
<script src="{{asset('js/style.js')}}"></script>
<script type="text/javascript">
    $('.target').on('change',function(){
        var target = $(this).val();
        $.ajax({
            url:"{{url('/setTarget')}}",
            type:"POST",
            dataType:'json',
            data:{"_token": "{{ csrf_token() }}","target":target},
            success: function(data) {
                location.reload();
            },
            error: function(e) {

            }
        });
    });

</script>
<script>
    $(function () {

        $('#desc').summernote();
        $('#content').summernote();

    })
</script>

{{--category ajax--}}



<script type="text/javascript">
    {{--category add--}}
    $(document).ready(function(){
        $('#category_add').click(function (){
            var name = $('.nameCate').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"{{url('admin/category/save')}}",
                method:'POST',
                data:{name:name,_token:_token},
                beforeSend: function () {
                    swal({
                        title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center">Loading...</span> ',
                        html: "loading",
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                },
                success:function (data){
                    swal({
                        type: 'success',
                        title: '{{__('Gửi Thành Công!!')}}',
                        text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                        confirmButtonColor:true,
                    },function (isConfirm){
                        if(isConfirm){
                            location.reload();
                        }
                    });

                },
                error:function (data){
                    sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề!!')}}","error")
                }
            });

        })

    })
    {{--category update--}}



    {{--category delete--}}
    function deleteCategory(id){
        swal({
                title: "{{__('Bạn Có Chắc Không?')}}",
                text: "{{__('Bạn sẽ không thể khôi phục lại được!!')}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{__('Đồng Ý!!')}}',
                cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){

                if (isConfirm){
                    // console.log(id)
                    $.ajax({
                        url:"{{url('admin/category/delete')}}"+'/'+id,
                        type:'DELETE',
                        data:{"_token": "{{ csrf_token() }}"},
                        beforeSend: function () {
                            swal({
                                title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center">Loading...</span> ',
                                html: "loading",
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        },
                        success:function (data){
                            swal({
                                type: 'success',
                                title: '{{__('Xóa Thành Công!!')}}',
                                text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                confirmButtonColor:true,
                            },function (isConfirm){
                                if(isConfirm){
                                    location.reload();
                                }
                            });

                        },
                        error:function (data){
                            // console.log(this.url)
                            sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề!!')}}","error")
                        }
                    });

                } else {
                    swal("{{__('Đã Hủy!!')}}", "{{__('ữ liệu vẫn còn!!')}}", "error");
                }
            });

    }

</script>

{{--.category ajax--}}

{{--post ajax--}}
<script type="text/javascript">
    //delete post
    function deletePost(id){
        swal({
                title: "{{__('Bạn Có Chắc Không?')}}",
                text: "{{__('Bạn sẽ không thể khôi phục lại được!!')}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{__('Đồng Ý!!')}}',
                cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){

                if (isConfirm){
                    // console.log(id)
                    $.ajax({
                        url:"{{url('admin/posts/delete')}}"+'/'+id,
                        type:'DELETE',
                        data:{"_token": "{{ csrf_token() }}"},
                        beforeSend: function () {
                            swal({
                                title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center">Loading...</span> ',
                                html: "loading",
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        },
                        success:function (data){
                            swal({
                                type: 'success',
                                title: '{{__('Gửi Thành Công!!')}}',
                                text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                confirmButtonColor:true,
                            },function (isConfirm){
                                if(isConfirm){
                                    location.reload();
                                }
                            });

                        },
                        error:function (data){
                            // console.log(this.url)
                            sweetAlert("Oops...","Something went wrong !!","error")
                        }
                    });

                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
    // send mail
    function sendMailPost(id){
        swal({
                title: "{{__('Bạn Có Chắc Không?')}}",
                text: "{{__('Bạn sẽ gửi thông tin bài viết cho mọi người!!')}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{__('Đồng Ý!!')}}',
                cancelButtonText: "{{__('Hủy Bỏ!!')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){

                if (isConfirm){
                    // console.log(id)

                    $.ajax({
                        @if(Auth::user()->role == 'AUTHOR')
                        url:"{{url('author/posts/send-mail-news')}}"+'/'+id,
                        @else
                        url:"{{url('admin/posts/send-mail-news')}}"+'/'+id,
                         @endif
                        type:'GET',
                        data:{"_token": "{{ csrf_token() }}"},
                        beforeSend: function () {
                            swal({
                                title: '<div class="spinner-border text-primary" role="status"></div><br/> <span class="text-center">Loading...</span> ',
                                html: "loading",
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        },
                        success:function (data){
                            swal({
                                type: 'success',
                                title: '{{__('Gửi Thành Công!!')}}',
                                text: '{{__('Nhấn vào nút để tiếp tục !!')}}',
                                confirmButtonColor:true,
                            },function (isConfirm){
                                if(isConfirm){
                                    location.reload();
                                }
                            });

                        },
                        error:function (data){
                            // console.log(this.url)
                            sweetAlert("{{__('Lỗi..')}}","{{__('Đã gặp vấn đề!!')}}","error")
                        }
                    });

                } else {
                    swal("{{__('Đã Hủy!!')}}", "{{__('Đữ liệu vẫn còn!!')}}", "error");
                }
            });

    }


</script>


