<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sambuddaraja Viharaya') }} - @yield('title', 'Home')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Base Styles -->
    <style>
        :root {
            --temple-primary: #8b4513;
            --temple-secondary: #d4a574;
            --temple-dark: #5c2e0a;
            --temple-light: #f5e6d3;
            --text-dark: #2d3436;
            --text-light: #636e72;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* ============================
           HEADER & NAVIGATION
        ============================ */
        .main-header {
            background: linear-gradient(135deg, var(--temple-primary) 0%, var(--temple-dark) 100%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .main-header.scrolled {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: white !important;
            font-weight: 700;
            font-size: 1.5rem;
            transition: transform 0.3s;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .brand-icon {
            width: 45px;
            height: 45px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--temple-primary);
            font-size: 1.5rem;
        }

        .navbar-toggler {
            border: 2px solid white;
            padding: 0.5rem 0.75rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-nav {
            gap: 0.5rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: white;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: white !important;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .nav-link:hover::before {
            width: 60%;
        }

        .nav-link.active {
            color: white !important;
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-link i {
            margin-right: 0.5rem;
            font-size: 1rem;
        }

        /* ============================
           FOOTER
        ============================ */
        .main-footer {
            background: linear-gradient(135deg, #2d3436 0%, #1e272e 100%);
            color: #dfe6e9;
            margin-top: 5rem;
        }

        .footer-content {
            padding: 3rem 0 1.5rem;
        }

        .footer-section h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-section h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--temple-secondary);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #b2bec3;
            text-decoration: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover {
            color: var(--temple-secondary);
            transform: translateX(5px);
        }

        .footer-links a i {
            font-size: 0.875rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: var(--temple-secondary);
            color: white;
            transform: translateY(-3px);
        }

        .footer-bottom {
            background: rgba(0, 0, 0, 0.2);
            padding: 1.5rem 0;
            margin-top: 2rem;
        }

        .footer-bottom p {
            margin: 0;
            color: #b2bec3;
        }

        .footer-bottom a {
            color: var(--temple-secondary);
            text-decoration: none;
        }

        .footer-bottom a:hover {
            text-decoration: underline;
        }

        /* ============================
           UTILITY CLASSES
        ============================ */
        .page-wrapper {
            min-height: calc(100vh - 400px);
        }

        /* ============================
           RESPONSIVE
        ============================ */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(0, 0, 0, 0.1);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 1rem;
            }

            .footer-section {
                margin-bottom: 2rem;
            }

            .footer-section h5::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .footer-section {
                text-align: center;
            }

            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.2rem;
            }

            .brand-icon {
                width: 35px;
                height: 35px;
                font-size: 1.2rem;
            }
        }
    </style>

    <!-- Page Specific Styles -->
    @stack('styles')
</head>
<body>

    <!-- ============================
         HEADER & NAVIGATION
    ============================ -->
    <header class="main-header" id="mainHeader">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <div class="brand-icon">
                        <i class="fas fa-dharmachakra"></i>
                    </div>
                    <span class="d-none d-md-inline">Sambuddaraja Viharaya</span>
                    <span class="d-md-none">Sambuddaraja</span>
                </a>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                <i class="fas fa-home"></i>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                <i class="fas fa-info-circle"></i>About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.index') }}">
                                <i class="fas fa-newspaper"></i>News
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}" href="{{ route('gallery.index') }}">
                                <i class="fas fa-images"></i>Gallery
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}" href="{{ route('events') }}">
                                <i class="fas fa-calendar-alt"></i>Events
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.create') }}">
                                <i class="fas fa-envelope"></i>Contact
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('donate') ? 'active' : '' }}" href="{{ route('donate') }}">
                                <i class="fas fa-hand-holding-heart"></i>Donate
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- ============================
         MAIN CONTENT
    ============================ -->
    <main class="page-wrapper">
        @yield('content')
    </main>

    <!-- ============================
         FOOTER
    ============================ -->
    <footer class="main-footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-4 col-md-6 footer-section">
                        <h5>About Us</h5>
                        <p style="color: #b2bec3; line-height: 1.8;">
                            Sambuddaraja Viharaya is a sacred Buddhist temple dedicated to promoting
                            peace, mindfulness, and spiritual growth in our community.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6 footer-section">
                        <h5>Quick Links</h5>
                        <ul class="footer-links">
                            <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="{{ route('news.index') }}"><i class="fas fa-chevron-right"></i> News</a></li>
                            {{-- <li><a href="{{ route('events') }}"><i class="fas fa-chevron-right"></i> Events</a></li> --}}
                            <li><a href="{{ route('gallery.index') }}"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div class="col-lg-3 col-md-6 footer-section">
                        <h5>Our Services</h5>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Meditation Classes</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Dharma Talks</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Sunday School</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Wedding Ceremonies</a></li>
                            {{-- <li><a href="{{ route('volunteer') }}"><i class="fas fa-chevron-right"></i> Volunteer</a></li> --}}
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-3 col-md-6 footer-section">
                        <h5>Contact Us</h5>
                        <ul class="footer-links">
                            <li>
                                <a href="#">
                                    <i class="fas fa-map-marker-alt"></i>
                                    123 Temple Street, City
                                </a>
                            </li>
                            <li>
                                <a href="tel:+1234567890">
                                    <i class="fas fa-phone"></i>
                                    +1 (234) 567-890
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@sambuddaraja.org">
                                    <i class="fas fa-envelope"></i>
                                    info@sambuddaraja.org
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-clock"></i>
                                    Mon-Sun: 6:00 AM - 8:00 PM
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                        <p>© {{ date('Y') }} Sambuddaraja Viharaya. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p>
                            Made with <i class="fas fa-heart" style="color: #e74c3c;"></i> by
                            <a href="#">Your Team</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Base Scripts -->
    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const navbarCollapse = document.getElementById('navbarNav');
                if (navbarCollapse.classList.contains('show')) {
                    bootstrap.Collapse.getInstance(navbarCollapse).hide();
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href !== '#!') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    </script>

    <!-- Page Specific Scripts -->
    @stack('scripts')
</body>
</html>
