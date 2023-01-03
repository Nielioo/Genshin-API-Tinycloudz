<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Documentation</title>
    <meta name="description" content="Ready to use Genshin Impact API">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <script src="https://tarptaeya.github.io/repo-card/repo-card.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('docs.index') }}">Docs</a></li>
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
    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar">
            <div class="d-lg-none top-search-box p-3">
                <form class="search-form"><input class="form-control form-control search-input" type="text"
                        placeholder="Search the docs..." name="search"><button class="btn search-btn" type="submit"
                        value="Search"><i class="fas fa-search"></i></button></form>
            </div>
            <nav id="docs-nav" class="docs-nav navbar">
                <ul class="nav flex-column section-items list-unstyled pb-3">
                    <li class="nav-item section-title"><a class="nav-link active scrollto" href="#section-1"><span
                                class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>Introduction</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-getting-started">Getting Started</a>
                    </li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span
                                class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>Installation</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-github">Github Repo</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span
                                class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>APIs</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-api-key">API Key</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-characters">Characters</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-weapons">Weapons</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-artifacts">Artifacts</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-enemies">Enemies</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span
                                class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>FAQs</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-general">General</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-support">Support</a></li>
                </ul>
            </nav>
        </div>

        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2023-01-01</span>
                        </h1>
                    </header>
                    <section class="docs-section" id="item-getting-started">
                        <h2 class="section-heading">Getting Started</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. </p>
                        {{-- Callout Template --}}
                        {{-- <div class="callout-block callout-block-info">
                            <div class="content">
                                <h4 class="callout-title"><span class="callout-icon-holder me-1"><i
                                            class="fas fa-info-circle"></i></span> Note </h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a
                                        href="#">link example</a> sit aspernatur aut odit aut fugit.
                                </p>
                            </div>
                        </div>
                        <div class="callout-block callout-block-warning">
                            <div class="content">
                                <h4 class="callout-title"><span class="callout-icon-holder me-1"><i
                                            class="fas fa-bullhorn"></i></span> Warning </h4>
                                <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere
                                    fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a
                                        href="#">link
                                        example</a> tellus vel diam viverra elementum.</p>
                            </div>
                        </div>
                        <div class="callout-block callout-block-success">
                            <div class="content">
                                <h4 class="callout-title"><span class="callout-icon-holder me-1"><i
                                            class="fas fa-thumbs-up"></i></span> Tip </h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link
                                        example</a> aenean commodo ligula eget dolor.</p>
                            </div>
                        </div>
                        <div class="callout-block callout-block-danger me-1">
                            <div class="content">
                                <h4 class="callout-title"><span class="callout-icon-holder"><i
                                            class="fas fa-exclamation-triangle"></i></span> Danger </h4>
                                <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut
                                    tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel
                                    dignissim.
                                    Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                            </div>
                        </div> --}}

                        {{-- Button Template --}}
                        {{-- <div class="row my-3">
                            <div class="col-12 col-md-6">
                                <ul class="list-unstyled list pl-0">
                                    <li><a class="btn btn-primary" role="button" href="#"><i
                                                class="fas fa-download me-2"></i> Download Now</a></li>
                                    <li><a class="btn btn-secondary" role="button" href="#"><i
                                                class="fas fa-book me-2"></i> View Docs</a></li>
                                    <li><a class="btn btn-light" role="button" href="#"><i
                                                class="fas fa-arrow-alt-circle-right me-2"></i> View Features</a></li>
                                    <li><a class="btn btn-warning" role="button" href="#"><i
                                                class="fas fa-bug me-2"></i> Report Bugs</a></li>
                                    <li><a class="btn btn-danger" role="button" href="#"><i
                                                class="fas fa-exclamation-circle me-2"></i> Submit Issues</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </section>
                </article>
                <article class="docs-article" id="section-2">
                    <header class="docs-header">
                        <h1 class="docs-heading">Installation</h1>
                    </header>
                    <section class="docs-section" id="item-github">
                        <h2 class="section-heading">Github Repo</h2>
                        <div class="repo-card" data-repo="Nielioo/Genshin-API-Tinycloudz"></div>
                    </section>
                </article>
                <article class="docs-article" id="section-3">
                    <header class="docs-header">
                        <h1 class="docs-heading">APIs</h1>
                    </header>
                    <section class="docs-section" id="item-api-key">
                        <h2 class="section-heading">API KEY</h2>
                        @guest
                            <p>You need an account to get an API key.&nbsp;<a href="{{ route('login') }}">Log
                                    in</a>&nbsp;to
                                see
                                your API key</p>
                        @endguest
                        @auth
                            <p>Here is your API Key</p>
                            <h4><kbd>{{ $apiKey }}</kbd></h4>
                        @endauth
                    </section>
                    <section class="docs-section" id="item-characters">
                        <h2 class="section-heading">Characters</h2>
                        <p>Access characters api on
                            <kbd>https://genshinapi.tinycloudz.com/public/api/characters?api_key={{ $apiKey }}</kbd>
                        </p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/66175143a16a19960eaff3d8987d694d.js"></script>
                        </div>
                        <h2 class="section-heading">Character Detail</h2>
                        <p>Access characters api on
                            <kbd>https://genshinapi.tinycloudz.com/public/api/characters/{CHARACTER_NAME}?api_key={{ $apiKey }}</kbd><br><br>You
                            can choose one CHARACTER_NAME from 'Characters' API
                        </p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/44ceae6b0739918c6ce0f916366a2547.js"></script>
                        </div>
                    </section>
                    <section class="docs-section" id="item-weapons">
                        <h2 class="section-heading">Weapons</h2>
                        <p>Access weapons api on
                            <kbd>https://genshinapi.tinycloudz.com/public/api/weapons?api_key={{ $apiKey }}</kbd>
                        </p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/1c03229775cbadcb8d38e2f6165f14fd.js"></script>
                        </div>
                    </section>
                    <section class="docs-section" id="item-artifacts">
                        <h2 class="section-heading">Artifacts</h2>
                        <p>Access artifacts api on
                            <kbd>https://genshinapi.tinycloudz.com/public/api/artifacts?api_key={{ $apiKey }}</kbd>
                        </p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/6a52101619e241eb3bad7ef17464490c.js"></script>
                        </div>
                    </section>
                    <section class="docs-section" id="item-enemies">
                        <h2 class="section-heading">Enemies</h2>
                        <p>Access enemies api on
                            <kbd>https://genshinapi.tinycloudz.com/public/api/enemies?api_key={{ $apiKey }}</kbd>
                        </p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/636ffdc8fba2228d537135d8ea344a78.js"></script>
                        </div>
                        <h2 class="section-heading">Enemy Detail</h2>
                        <p>Access enemies api on
                            <kbd>https://genshinapi.tinycloudz.com/public/api/enemies/{ENEMY_NAME}?api_key={{ $apiKey }}</kbd><br><br>You
                            can choose one ENEMY_NAME from 'Enemies' API
                        </p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/6310864c1ea32af59c5e463bd6d37703.js"></script>
                        </div>
                    </section>
                    <article class="docs-article" id="section-5">
                        <header class="docs-header">
                            <h1 class="docs-heading">FAQs</h1>
                        </header>
                        <section class="docs-section" id="item-general">
                            <h2 class="section-heading">General</h2>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Are there any limits to the
                                requests?
                            </h5>
                            <p>No. Feel free to use our APIs</p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Is the REST API service
                                free?</h5>
                            <p>Yes!</p>
                        </section>
                        <section class="docs-section" id="item-support">
                            <h2 class="section-heading">Support</h2>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>I have a problem using this!
                            </h5>
                            <p>Feel free to join our Discord Server or open an issue and we'll help you out!</p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>I found a bug!</h5>
                            <p>Please open a new issue on our github repo with details of the problem and how it
                                occured.</p>
                            <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>The REST API isn't working!
                            </h5>
                            <p>Uh-oh. Open an issue on our github repo and we'll resolve it ASAP.</p>
                        </section>
                    </article>
                    <footer class="footer">
                        <div class="container text-center py-5"><small class="copyright">Designed with <span
                                    class="sr-only">love</span><i class="fas fa-heart" style="color:#fb866a;"></i> by
                                <a class="theme-link" href="https://tinycloudz.com" target="_blank">TinyCloudz
                                    Team</a>
                                for
                                developers</small>
                            <ul class="list-unstyled social-list pt-4 mb-0">
                                <li class="list-inline-item"><i class="fab fa-github fa-fw"></i></li>
                                <li class="list-inline-item"><i class="fab fa-twitter fa-fw"></i></li>
                                <li class="list-inline-item"><i class="fab fa-facebook-f fa-fw"></i></li>
                                <li class="list-inline-item"><i class="fab fa-instagram fa-fw"></i></li>
                            </ul>
                        </div>
                    </footer>
            </div>
        </div>
    </div>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
