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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('docs.index') }}">Docs</a></li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-primary shadow dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ $user->name }}
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-3 bg-primary-gradient">
        <div class="d-flex flex-column">
            <div class="card mb-2">
                <div class="card-body d-flex flex-column align-items-start"> 
                    <div class="max-w-xl">
                        @include('profile-custom.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
        
            <div class="card mb-2">
                <div class="card-body d-flex flex-column align-items-start"> 
                    <div class="max-w-xl">
                        @include('profile-custom.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body d-flex flex-column align-items-start"> 
                    <div class="max-w-xl">
                        @include('profile-custom.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
