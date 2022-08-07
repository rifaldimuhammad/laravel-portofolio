<!DOCTYPE html>
<html lang="en">
@include('layout/link')
<body>
    @include('layout/sidebar')
    <div class="global-container">
        @yield('content')
    </div>
    <script src="{{ asset('./js/jquery.js') }}"></script>
    @include('layout/script')
    @yield('js')
</body>

</html>
