<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Genshin Impact API by TinyCloudz</title>
    <meta name="description" content="Ready to use Genshin Impact API">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
    <nav id="mainNav" class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3">
        <div class="container"><img class="img-fluid" src="assets/img/brands/Genshin_Impact_logo.svg" width="87"
                height="31" style="padding-left: 0px;padding-right: 0px;margin-right: 12px;" /><a
                class="navbar-brand d-flex align-items-center" href="{{ route('home.index') }}"><span>TinyCloudz</span></a><button
                class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav " style="margin-right: 0px; margin-left: auto ">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('docs.index') }}">Docs</a></li>
                    <li><a class="btn btn-primary shadow" role="button" href="/register-custom">Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card">
        <div class="card-body text-center d-flex flex-column align-items-center">
            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg
                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                    viewBox="0 0 16 16" class="bi bi-person">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                    </path>
                </svg></div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email Address --}}
                <div class="mb-3">
                    <input class="form-control" type="email" name="email" placeholder="Email"
                        value="{{ old('email') }}" required autofocus>
                    @foreach ($errors->get('email') as $error)
                        <p class="mt-2">{{ $error }}</p>
                    @endforeach
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <input class="form-control" type="password" name="password" placeholder="Password" required
                        autocomplete="current-password">
                    @foreach ($errors->get('password') as $error)
                        <li class="mt-2">{{ $error }}</li>
                    @endforeach
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary shadow d-block w-100" type="submit">Log in</button>
                </div>
                <!-- <p class="text-muted">Don&#39;t have an Account? <a href="register.html">Register here</a></p>   -->
                <p class="text-muted">Forgot your password?</p>
            </form>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
