<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="{{ url('/') }}"><img src="{{ asset('img/logo-1.png') }}" alt=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li>
                    <a class="{{ Request::is('features') ? 'active' : '' }}" href="{{ route('features') }}">Features</a>
                </li>
                <li>
                    <a class="{{ Request::is('our-team') ? 'active' : '' }}" href="{{ route('our-team') }}">Our Team</a>
                </li>
                <li>
                    <a class="{{ Request::is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                </li>
                <li>
                    <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li>
                    <a class="{{ Request::is('frequently-asked-questions') ? 'active' : '' }}"
                        href="{{ route('frequently-asked-questions') }}">FAQs</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->
        <p class="mb-0 view-demo"><a href="{{ route('demo-video') }}" class="btn btn-primary btn-sm">View Demo</a></p>

    </div>
</header>
