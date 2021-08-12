<script src="{{asset('dist/jquery/jquery-3.4.1.min.js')}}"></script>
{{--<script src="{{asset('dist/bootstrap-5/js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('dist/bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('dist/src/js/modules/vector-map.js')}}"></script>
<script src="{{asset('dist/summernote/summernote-bs4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/dist/sweetalert/sweetalert.min.js')}}"></script>

<script src="{{asset('js/style.js')}}"></script>
<script>
    $(function () {

        $('#summernote').summernote()

    })
</script>

{{--category ajax--}}

{{--category add--}}

<script type="text/javascript">
    $(document).ready(function(){
        $('#category_add').click(function (){
            var name = $('.nameCate').val();
            var _token = $('.cate_add  input[name="_token"]').val();

            $.ajax({
                url:"{{url('admin/category/save')}}",
                method:'POST',
                data:{name:name,_token:_token},
                success:function (data){
                    // swal("Hey, Add Success!!","You clicked the button !!","success")
                    alert(data)

                },
                error:function (data){
                    {swal({title:"Are you sure to delete ?",text:"You will not be able to recover this imaginary file !!",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Yes, delete it !!",cancelButtonText:"No, cancel it !!",closeOnConfirm:!1,closeOnCancel:!1},function(e){e?swal("Deleted !!","Hey, your imaginary file has been deleted !!","success"):swal("Cancelled !!","Hey, your imaginary file is safe !!","error")})}
                }

            });

        })

    })
    {{--category update--}}



    {{--category delete--}}
</script>
{{--category ajax--}}
