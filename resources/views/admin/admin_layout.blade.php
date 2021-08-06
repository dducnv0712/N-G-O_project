<!DOCTYPE html>
<html lang="en">

{{--head--}}
<x-ad_head></x-ad_head>
{{--head--}}

<body>
<div class="wrapper">

    {{--siderbar--}}
    <x-ad_siderbar></x-ad_siderbar>
    {{--.siderbar--}}

    <div class="main">

        {{--nav--}}
        <x-ad_nav></x-ad_nav>
        {{--.nav--}}


        <main class="content">
            {{--main--}}
            @yield('main')
            {{--.main--}}
        </main>

        {{--footer--}}
        <x-ad_footer></x-ad_footer>
        {{--.footer--}}

    </div>
</div>

{{--script--}}
<x-ad_script></x-ad_script>
{{--.script--}}

</body>

</html>
