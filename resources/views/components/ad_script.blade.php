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
        $('#dataTable-replied').DataTable();
        $('#dataTable-postAd').DataTable();
        $('#dataTable-postAth').DataTable();
        $('#dataTable-volunteer-confirm').DataTable();
        $('#dataTable-volunteers').DataTable();
        $('#dataTable-gallery').DataTable();


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


    $(document).ready(function(){

        // Define function to open filemanager window
        var lfm = function(options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/admin/project-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {

                    lfm({type: 'image', prefix: '/admin/project-filemanager'}, function(lfmItems, path) {
                        lfmItems.forEach(function (lfmItem) {
                            context.invoke('insertImage', lfmItem.url);
                        });
                    });
                    lfm({type: 'image', prefix: '/volunteer-dashboard/project-filemanager'}, function(lfmItems, path) {
                        lfmItems.forEach(function (lfmItem) {
                            context.invoke('insertImage', lfmItem.url);
                        });
                    });
                }
            });
            return button.render();
        };

        // Initialize summernote with LFM button in the popover button group
        // Please note that you can add this button to any other button group you'd like

        $('#reply-mail').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                // ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['para', ['paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });
        $('#desc').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                // ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['para', ['paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $('#content').summernote({
            styleTags: [
                'p',
                { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
            toolbar: [
                ['style', ['style']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ['popovers', ['lfm']]
            ],
            buttons: {
                lfm: LFMButton
            }
        });
    });
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
                        url:"{{url('admin/projects/delete')}}"+'/'+id,
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
    //delete gallery
    function deleteGallery(id){
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
                        @if(Auth::user()->role == 'VOLUNTEER')
                        url:"{{url('volunteer-dashboard/gallery/delete')}}"+'/'+id,
                        @else
                        url:"{{url('admin/gallery/delete')}}"+'/'+id,
                        @endif
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
                            sweetAlert("Oops...","Something went wrong !!","error")
                        }
                    });

                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
    //delete sponsor
    function deleteSponsor(id){
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
                        url:"{{url('admin/sponsor/delete')}}"+'/'+id,
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
                        @if(Auth::user()->role == 'VOLUNTEER')
                        url:"{{url('volunteer-dashboard/projects/send-mail-news')}}"+'/'+id,
                        @else
                        url:"{{url('admin/projects/send-mail-news')}}"+'/'+id,
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
<script src="{{asset('')}}dist/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
    (function($) {
        "use strict";

        // magnific popup
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                verticalFit: true,

            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });
    })(jQuery);
</script>
{{--file manager code--}}
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script type="text/javascript">
    $('#projects-upload').filemanager('image');
        var posts_prefix_ad = "/admin/projects/project-filemanager";
    $('#projects-upload').filemanager('image', {prefix_ad: posts_prefix_ad});

</script>
<script type="text/javascript">
    $('#projects-upload-volunteer').filemanager('image');
        var posts_prefix = "/volunteer-dashboard/projects/project-filemanager-volunteer";
    $('#projects-upload-volunteer').filemanager('image', {prefix_volunteer: posts_prefix});

</script>



<script type="text/javascript">
    $('#gallery-upload').filemanager('image');
     var route_prefix_ad = "/admin/gallery/project-filemanager";
    $('#gallery-upload').filemanager('image', {prefix: route_prefix_ad});
</script>
<script type="text/javascript">
    $('#gallery-upload-volunteer').filemanager('image');
    var route_prefix = "/volunteer-dashboard/project-filemanager";
    $('#gallery-upload-volunteer').filemanager('image', {prefix: route_prefix});
</script>


<script type="text/javascript">
    $('#sponsor-upload').filemanager('image');
    var route_sponsor = "/admin/sponsor/project-filemanager";
    $('#sponsor-upload').filemanager('image', {prefix: route_sponsor});
</script>


<script type="text/javascript">
    $('#file-manager').filemanager('image');
     var route_filemanager_ad = "/admin/project-filemanager";
    $('#file-manager').filemanager('image', {prefix: route_filemanager_ad});
</script>
<script type="text/javascript">
    $('#file-manager-volunteer').filemanager('image');
       var route_filemanager = "/volunteer-dashboard/project-filemanager";
    $('#file-manager-volunteer').filemanager('image', {prefix: route_filemanager});
</script>


