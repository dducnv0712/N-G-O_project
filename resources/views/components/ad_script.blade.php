<script src="{{asset('dist/jquery/jquery-3.4.1.min.js')}}"></script>
{{--<script src="{{asset('dist/bootstrap-5/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('dist/src/js/modules/vector-map.js')}}"></script>
<script src="{{asset('dist/summernote/summernote-bs4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/dist/sweetalert/sweetalert.min.js')}}"></script>

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
                        title: '{{translateText('Gửi Thành Công!!')}}',
                        text: '{{translateText('Nhấn vào nút để tiếp tục !!')}}',
                        confirmButtonColor:true,
                    },function (isConfirm){
                        if(isConfirm){
                            location.reload();
                        }
                    });

                },
                error:function (data){
                    sweetAlert("{{translateText('Lỗi..')}}","{{translateText('Đã gặp vấn đề!!')}}","error")
                }
            });

        })

    })
    {{--category update--}}



    {{--category delete--}}
    function deleteCategory(id){
        swal({
                title: "{{translateText('Bạn Có Chắc Không?')}}",
                text: "{{translateText('Bạn sẽ không thể khôi phục lại được!!')}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{translateText('Đồng Ý!!')}}',
                cancelButtonText: "{{translateText('Hủy Bỏ!!')}}",
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
                                title: '{{translateText('Gửi Thành Công!!')}}',
                                text: '{{translateText('Nhấn vào nút để tiếp tục !!')}}',
                                confirmButtonColor:true,
                            },function (isConfirm){
                                if(isConfirm){
                                    location.reload();
                                }
                            });

                        },
                        error:function (data){
                            // console.log(this.url)
                            sweetAlert("{{translateText('Lỗi..')}}","{{translateText('Đã gặp vấn đề!!')}}","error")
                        }
                    });

                } else {
                    swal("{{translateText('Đã Hủy!!')}}", "{{translateText('ữ liệu vẫn còn!!')}}", "error");
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
                title: "{{translateText('Bạn Có Chắc Không?')}}",
                text: "{{translateText('Bạn sẽ không thể khôi phục lại được!!')}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{translateText('Đồng Ý!!')}}',
                cancelButtonText: "{{translateText('Hủy Bỏ!!')}}",
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
                                title: '{{translateText('Gửi Thành Công!!')}}',
                                text: '{{translateText('Nhấn vào nút để tiếp tục !!')}}',
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
                title: "{{translateText('Bạn Có Chắc Không?')}}",
                text: "{{translateText('Bạn sẽ gửi thông tin bài viết cho mọi người!!')}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{translateText('Đồng Ý!!')}}',
                cancelButtonText: "{{translateText('Hủy Bỏ!!')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){

                if (isConfirm){
                    // console.log(id)

                    $.ajax({
                        url:"{{url('admin/posts/send-mail-news')}}"+'/'+id,
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
                                title: '{{translateText('Gửi Thành Công!!')}}',
                                text: '{{translateText('Nhấn vào nút để tiếp tục !!')}}',
                                confirmButtonColor:true,
                            },function (isConfirm){
                                if(isConfirm){
                                    location.reload();
                                }
                            });

                        },
                        error:function (data){
                            // console.log(this.url)
                            sweetAlert("{{translateText('Lỗi..')}}","{{translateText('Đã gặp vấn đề!!')}}","error")
                        }
                    });

                } else {
                    swal("{{translateText('Đã Hủy!!')}}", "{{translateText('Đữ liệu vẫn còn!!')}}", "error");
                }
            });

    }


</script>


