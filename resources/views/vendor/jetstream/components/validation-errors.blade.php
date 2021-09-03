@if ($errors->any())
    <div {{ $attributes }}>
        <link  rel="stylesheet" href="{{asset('/dist/sweetalert/sweetalert.css')}}">
        <script type="text/javascript" src="{{asset('/dist/sweetalert/sweetalert.min.js')}}"></script>
        <script>
            swal({
                title: '{{ __('Whoops! Something went wrong.\n') }} <br> <ul class="mt-3 list-disc list-inside text-sm text-red-600">@foreach ($errors->all() as $error)<li>{{ $error }}</li> @endforeach </ul>',
                html: "error",
                showCancelButton:false,
                showConfirmButton:true
            });
        </script>

{{--        <ul class="mt-3 list-disc list-inside text-sm text-red-600">--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
    </div>
@endif
