

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title -->
    <title>Innap - Hotel Admin Dashboard Bootstrap Templates</title>

    <!-- Meta -->
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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/assets2/images/favicon.png') }}">
    <link href="{{ asset('assets/assets2/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets2/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-dark.png" class="dark-login"
                                                alt=""></a>
                                        <a href="index.html"><img src="images/logo-white.png" class="light-login"
                                                alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control  @error('email') is-invalid @enderror" type="text"
                                                name="email" placeholder="Enter Email" value="{{ old('email') }}" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control  @error('password') is-invalid @enderror" type="password"
                                                name="password" placeholder="Enter Password" value="{{ old('password') }}" required
                                                autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary"
                                                href="page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/assets2/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/styleSwitcher.js') }}"></script>
</body>

</html>
