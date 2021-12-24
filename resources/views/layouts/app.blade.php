<!doctype html>
<html lang="en">
    {{-- head --}}
@include('layouts.src.head')
<body>
    @include('layouts.src.header')
    @yield('content')
    @include('layouts.src.scripts')
</body>
</html>
