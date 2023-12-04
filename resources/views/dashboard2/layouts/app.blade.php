<!DOCTYPE html>
<html lang="en">

<head>
    {{-- //////////// --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="accommodation, admin dashboard, admin template, apartment, booking, bootstrap 5, dinning, hostel, hotel booking, hotel template, motel, resort, restaurant, room">
    <meta name="description"
        content="Innap is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various hotel booking and hotel template, booking, dinning, hostel, and other businesses">

    <meta property="og:title" content="Innap - Hotel Admin Dashboard Bootstrap Templates">
    <meta property="og:description"
        content="Innap is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various hotel booking and hotel template, booking, dinning, hostel, and other businesses">
    <meta property="og:image" content="https://innap.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="{{ asset('assets/assets2/image/x-icon') }}" href="{{ asset('assets/assets2/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('assets/assets2/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets2/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">
    <!-- Style css -->
    <link href="{{ asset('assets/assets2/css/style.css') }}" rel="stylesheet">

<body>
    {{-- @yield('header')
    @yield('sidebar') --}}
    

    @yield('content')

    <script src="{{ asset('assets/assets2/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/assets2/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/assets2/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('assets/assets2/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('assets/assets2/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/assets2/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/ar/RTL.JS') }}"></script>

    <script src="{{ asset('assets/assets2/js/demo.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/ar/RTL.JS') }}"></script>

    <script>
        $(function() {
            $('#datetimepicker').datetimepicker({
                inline: true,
            });
        });

        $(document).ready(function() {
            $(".booking-calender .fa.fa-clock-o").removeClass(this);
            $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
        });
    </script>
</body>

</html>
