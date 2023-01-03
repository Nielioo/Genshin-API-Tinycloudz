<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
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
                class="navbar-brand d-flex align-items-center"
                href="{{ route('home.index') }}"><span>TinyCloudz</span></a><button class="navbar-toggler"
                data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse">
                <ul class="navbar-nav " style="margin-right: 0px; margin-left: auto ">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('docs.index') }}">Docs</a></li>
                    @guest
                        <li><a class="btn btn-primary shadow" role="button" href="{{ route('login') }}">Log in</a></li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown">
                            <button class="btn btn-primary shadow dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $username }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </form>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-primary-gradient">
        <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"
                        style="background: url('assets/img/characters/nahida.png') center center / cover no-repeat;padding-top: 0px;padding-bottom: 0px;margin-top: 0px;margin-bottom: 0px;">
                    </div>
                    <div class="swiper-slide"
                        style="background:url('assets/img/characters/wanderer.png') center center / cover no-repeat;">
                    </div>
                    <div class="swiper-slide"
                        style="background:url('assets/img/characters/faruzan.png') center center / cover no-repeat;">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <h1 class="fw-bold">Genshin Impact API</h1>
                        <p class="fw-bold text-primary mb-2">All about Genshin Impact game resources</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center pt-5">
            <a class="btn btn-dark" role="button" href="{{ route('docs.index') }}">View Documentation Here</a>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div
                class="border rounded border-white d-flex flex-column justify-content-between align-items-center flex-lg-row bg-primary-gradient p-4 p-lg-5">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2">Subscribe to our newsletter</h2>
                    <p class="mb-0">For incoming updates</p>
                </div>
                <form class="d-flex justify-content-center flex-wrap flex-lg-nowrap" method="post">
                    <div class="my-2"><input class="border rounded-pill shadow-sm form-control" type="email"
                            name="email" placeholder="Your Email"></div>
                    <div class="my-2"><button class="btn btn-primary shadow ms-2" type="submit">Subscribe </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="bg-primary-gradient">
        <div class="container py-4 py-lg-5">
            <div class="text-muted d-flex justify-content-center align-items-center pt-3">
                <p class="mb-0">Copyright © 2022 TinyCloudz</p>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
