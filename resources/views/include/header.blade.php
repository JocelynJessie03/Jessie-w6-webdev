<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="40" class="me-2 rounded-circle border border-light">
                <span class="fw-bold">Snap & Joy Photobooth</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home.show') ? 'active' : '' }}" href="{{ route('home.show') }}">Home Page</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about.show') ? 'active' : '' }}" href="{{ route('about.show') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('services.show') ? 'active' : '' }}" href="{{ route('services.show') }}">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact.show') ? 'active' : '' }}" href="{{ route('contact.show') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>