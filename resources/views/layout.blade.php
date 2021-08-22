<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head></x-head>


<body>
<x-nav></x-nav>
@yield('main')
<x-footer></x-footer>
<x-script></x-script>

</body>
</html>
