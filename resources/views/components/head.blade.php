
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
{{--    <meta name="description" content="@yield("page_desc","Dong Gop")" />--}}
    <link rel="alternate" href="@yield("page_alternate",asset('/'))" hreflang="vi-vn" />
{{--    <meta name="keywords" content="@yield("page_keywords","Dong Gop")" />--}}
    <link rel="canonical" href="@yield("page_canonical",asset('/trang-chu'))">

    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

    <title>@yield("page_title","Charity || N-G-O")</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dist/assets/images/favicons/Charity.svg')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dist/assets/images/favicons/Charity.svg')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/assets/images/favicons/Charity.svg')}}" />
    <link rel="manifest" href="{{asset('dist/assets/images/favicons/site.webmanifest')}}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dist/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('dist/bootstrap-5/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/halpes-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/reey-font/stylesheet.css')}}" />
    <link  rel="stylesheet" href="{{asset('/dist/sweetalert/sweetalert.css')}}">
    <link  rel="stylesheet" href="{{asset('/dist/data-table/fixedColumns.dataTables.min.css')}}">
    <link  rel="stylesheet" href="{{asset('/dist/data-table/datatables.min.css')}}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    @livewireStyles
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('dist/assets/css/halpes-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/assets/css/halpes.css')}}" />

</head>
