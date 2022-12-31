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
                    <li class="nav-item"><a class="nav-link active" href="{{ route('docs.index') }}">Docs</a></li>
                    <li><a class="btn btn-primary shadow" role="button" href="/login-custom">Log in</a></li>
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
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Section Item 1.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Section Item 1.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span
                                class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>Installation</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Section Item 2.1</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span
                                class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>APIs</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-api-key">API Key</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-characters">Characters</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-weapons">Weapons</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-artifacts">Artifacts</a></li>
                    {{-- hereee --}}
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-6">
                            <span class="theme-icon-holder me-2"><i class="fas fa-laptop-code"></i></span>Web</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-1">Section Item 6.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-2">Section Item 6.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-3">Section Item 6.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-7"><span
                                class="theme-icon-holder me-2"><i class="fas fa-tablet-alt"></i></span>Mobile</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-1">Section Item 7.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-2">Section Item 7.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-3">Section Item 7.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span
                                class="theme-icon-holder me-2"><i class="fas fa-book-reader"></i></span>Resources</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-1">Section Item 8.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-2">Section Item 8.2</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-3">Section Item 8.3</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-9"><span
                                class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>FAQs</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-1">Section Item 9.1</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">Section Item 9.2</a></li>
                </ul>
            </nav>
        </div>
        <div class="docs-content">
            <div class="container">
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2022-12-15</span>
                        </h1>
                        <section class="docs-intro">
                            <p>// Isi tujuan dan pengenalan tentang API ini</p>
                        </section>
                        <h5>Buat Github, klo perlu</h5>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/60f2dac2b1522253dfe87c03efa12649.js"></script>
                        </div>
                        <h5>Ini buat code json nanti:</h5>
                        <p>You can <a class="theme-link" href="https://github.com/highlightjs/highlight.js"
                                target="_blank">embed your code snippets using highlight.js</a> It supports <a
                                class="theme-link" href="https://highlightjs.org/static/demo/" target="_blank">185
                                languages and 89 styles</a>.</p>
                        <p>This template uses <a class="theme-link" href="https://highlightjs.org/static/demo/"
                                target="_blank">Atom One Dark</a> style for the code blocks:
                            <br><code>&lt;link rel="stylesheet"
                                href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css"&gt;</code>
                        </p>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">[
  {
    <span class="hljs-attr">"title"</span>: <span class="hljs-string">"apples"</span>,
    <span class="hljs-attr">"count"</span>: [<span class="hljs-number">12000</span>, <span class="hljs-number">20000</span>],
    <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
  },
  {
    <span class="hljs-attr">"title"</span>: <span class="hljs-string">"oranges"</span>,
    <span class="hljs-attr">"count"</span>: [<span class="hljs-number">17500</span>, <span class="hljs-literal">null</span>],
    <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
  }
]


</code></pre>
                        </div>
                    </header>
                    <section class="docs-section" id="item-1-1">
                        <h2 class="section-heading">Section Item 1.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. </p>
                        <p>// Buat Code satu baris: <code>npm install &lt;package&gt;</code></p>
                        <h5>Callout buat tips and tricks atau quote:</h5>
                        <div class="callout-block callout-block-info">
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
                        </div>
                    </section>
                    <section class="docs-section" id="item-1-3">
                        <h2 class="section-heading">Section Item 1.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                        <h5>Button buat nanti:</h5>
                        <div class="row my-3">
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
                        </div>
                    </section>
                </article>
                <article class="docs-article" id="section-2">
                    <header class="docs-header">
                        <h1 class="docs-heading">Installation</h1>
                        <section class="docs-intro">
                            <p>// Penjelasan cara instalasi</p>
                        </section>
                    </header>
                    <section class="docs-section" id="item-2-1">
                        <h2 class="section-heading">Section Item 2.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                </article>
                <article class="docs-article" id="section-3">
                    <header class="docs-header">
                        <h1 class="docs-heading">APIs</h1>
                        <section class="docs-intro">
                            <p>// Cara pakai API</p>
                        </section>
                    </header>
                    <section class="docs-section" id="item-api-key">
                        <h2 class="section-heading">API KEY</h2>
                        @guest
                            <p>You need an account to get an API key.&nbsp;<a href="/login-custom">Log in</a>&nbsp;to see your API key</p>
                        @endguest
                        @auth
                            <p>Here is your API Key</p>
                            <h4><kbd>{{ $apiKey }}</kbd></h4>
                        @endauth
                    </section>
                    <section class="docs-section" id="item-characters">
                        <h2 class="section-heading">Characters</h2>
                        <p>Access characters api on https://tinycloudz.com/genshin_api/api/characters?api_key={{$apiKey}}</p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/66175143a16a19960eaff3d8987d694d.js"></script>
                        </div>
                        <h2 class="section-heading">Character Detail</h2>
                        <p>Access characters api on https://tinycloudz.com/genshin_api/api/characters/{CHARACTER_NAME}?api_key={{$apiKey}}<br>You can choose CHARACTER_NAME from 'Characters' API</p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/44ceae6b0739918c6ce0f916366a2547.js"></script>
                        </div>
                    </section>
                    <section class="docs-section" id="item-weapons">
                        <h2 class="section-heading">Weapons</h2>
                        <p>Access weapons api on https://tinycloudz.com/genshin_api/api/weapons?api_key={{$apiKey}}</p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/1c03229775cbadcb8d38e2f6165f14fd.js"></script>
                        </div>
                    </section>
                    <section class="docs-section" id="item-artifacts">
                        <h2 class="section-heading">artifacts</h2>
                        <p>Access artifacts api on https://tinycloudz.com/genshin_api/api/artifacts?api_key={{$apiKey}}</p>
                        <div class="docs-code-block">
                            <script src="https://gist.github.com/Nielioo/6a52101619e241eb3bad7ef17464490c.js"></script>
                        </div>
                    </section>
                </article>
                {{-- hereee --}}
                <article class="docs-article" id="section-6">
                    <header class="docs-header">
                        <h1 class="docs-heading">Web</h1>
                        <section class="docs-intro">
                            <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit.
                                Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                        </section>
                    </header>
                    <section class="docs-section" id="item-6-1">
                        <h2 class="section-heading">Section Item 6.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <section class="docs-section" id="item-6-2">
                        <h2 class="section-heading">Section Item 6.2</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <section class="docs-section" id="item-6-3">
                        <h2 class="section-heading">Section Item 6.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                </article>
                <article class="docs-article" id="section-7">
                    <header class="docs-header">
                        <h1 class="docs-heading">Mobile</h1>
                        <section class="docs-intro">
                            <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit.
                                Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                        </section>
                    </header>
                    <section class="docs-section" id="item-7-1">
                        <h2 class="section-heading">Section Item 7.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <section class="docs-section" id="item-7-2">
                        <h2 class="section-heading">Section Item 7.2</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <section class="docs-section" id="item-7-3">
                        <h2 class="section-heading">Section Item 7.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                </article>
                <article class="docs-article" id="section-8">
                    <header class="docs-header">
                        <h1 class="docs-heading">Resources</h1>
                        <section class="docs-intro">
                            <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit.
                                Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam
                                lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
                        </section>
                    </header>
                    <section class="docs-section" id="item-8-1">
                        <h2 class="section-heading">Section Item 8.1</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <section class="docs-section" id="item-8-2">
                        <h2 class="section-heading">Section Item 8.2</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                    <section class="docs-section" id="item-8-3">
                        <h2 class="section-heading">Section Item 8.3</h2>
                        <p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis
                            leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis
                            felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio
                            in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec
                            arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
                    </section>
                </article>
                <article class="docs-article" id="section-9">
                    <header class="docs-header">
                        <h1 class="docs-heading">FAQs</h1>
                        <section class="docs-intro">
                            <p>// List untuk pertanyaan umum</p>
                        </section>
                    </header>
                    <section class="docs-section" id="item-9-1">
                        <h2 class="section-heading">Section Item 9.1 - Using API on Flutter&nbsp;</h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>What's sit amet quam eget
                            lacinia?
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu
                            pede mollis pretium.</p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to ipsum dolor sit amet quam
                            tortor?</h5>
                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus
                            nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus
                            quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Can I bibendum sodales?</h5>
                        <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy
                            id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where arcu sed urna gravida?
                        </h5>
                        <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam
                            mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo.
                            Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida
                            lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                    </section>
                    <section class="docs-section" id="item-9-2">
                        <h2 class="section-heading">Section Item 9.2 forum discussion<small></small></h2>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>What's sit amet quam eget
                            lacinia?
                        </h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu
                            pede mollis pretium.</p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>How to ipsum dolor sit amet quam
                            tortor?</h5>
                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus
                            nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus
                            quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Can I bibendum sodales?</h5>
                        <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy
                            id, metus. Nullam accumsan lorem in dui. </p>
                        <h5 class="pt-3"><i class="fas fa-question-circle me-1"></i>Where arcu sed urna gravida?
                        </h5>
                        <p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam
                            mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo.
                            Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida
                            lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
                    </section>
                </article>
                <footer class="footer">
                    <div class="container text-center py-5"><small class="copyright">Designed with <span
                                class="sr-only">love</span><i class="fas fa-heart" style="color:#fb866a;"></i> by <a
                                class="theme-link" href="https://tinycloudz.com" target="_blank">TinyCloudz Team</a>
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
